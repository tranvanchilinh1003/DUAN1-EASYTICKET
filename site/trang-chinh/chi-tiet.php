<?php
// kiểm tra lỗi php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require '../../global.php';
require "../../model/pdo.php";
require '../../model/movies.php';
require '../../model/statistical.php';
//-------------------------------//

extract($_REQUEST);
movies_view($id);
// Truy vấn mặt hàng theo mã lấy nó ra để hiện thị
$item = movies_select_by_id($id);
extract($item);
if (exist_param("pull_comment")) {
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];
    $movies_id = $_POST['movies_id'];
    $comment_date = date("Y-m-d");
    comments_insert($id,  $users_id, $movies_id, $content, $comment_date, $ratings);
    // Lấy list bình luận ra

    $comments_movies = comments_select_by_id_movies($movies_id);
}
// Tăng số lượt xem lên 1
// movies_view($id);
$VIEW_NAME = "chi-tiet-phim.php";
require '../layout.php';
