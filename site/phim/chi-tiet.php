<?php
// kiểm tra lỗi php 

require '../../global.php';
require "../../model/pdo.php";
require '../../model/movies.php';
require '../../model/statistical.php';
require '../../model/categories.php';
//-------------------------------//

extract($_REQUEST);
if (exist_param("id")) {
    // Truy vấn mặt hàng theo mã lấy nó ra để hiện thị
    $movies_id = $_GET['id'];
    // $item = movies_select_by_id($id);
    // Tăng số lượt xem lên 1
    movies_view($id);
    
    $item = detail_movies($id);
    // $movies_id = $_SESSION['id'];
    $cmt = count_comment($movies_id);
    $avr_ratings = avr_ratings($id);


    $_SESSION['id'] = $item['id'];
} else if (exist_param("pull_comment")) {
    $movies_id = $_SESSION['id'];
    $content = $_POST['content'];
    $users_id = $_SESSION['customers'];
    $comment_date = date_format(date_create(), 'Y-m-d');
    $ratings = $_POST['ratings'];

    comments_insert($content, $comment_date, $ratings, $movies_id, $users_id);
    header("location: ".$SITE_URL." /phim/chi-tiet.php?id=" . $movies_id);
    // $VIEW_NAME = "chi-tiet-phim.php";
}
// Lấy list bình luận ra
$binh_luan_list = comments_select_by_id_movies($id);
$VIEW_NAME = "chi-tiet-phim.php";
require '../layout.php';
