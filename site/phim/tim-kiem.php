<?php

extract($_REQUEST);
require '../../global.php';
require '../../model/pdo.php';
require '../../model/movies.php';
require '../../model/categories.php';
require '../../model/statistical.php';
//-------------------------------//
extract($_REQUEST);
if (exist_param("keyword")) {
    if (isset($_GET["search"])) {
        $_SESSION['key'] = $_GET["keyword"];
        if ($keyword == '') {
            // $title_site = "TẤT CẢ SẢN PHẨM";
            // $word = "Chào Mừng Bạn Đến Với Danh Sách Phim Của Easy-Ticket";
            header("location:" . $SITE_URL . "/phim/tim-kiem.php?all&page=1");
        } else {
            $title_site = "Các Sản Phẩm Có Chứa Từ Khóa: '$keyword'";
            $word = "";
        }
        $items = movies_select_keyword($keyword);
        if (count($items) == 0) {
            $title_site = "Không Sản Phẩm Nào Chứa Từ Khóa: '$keyword'";
            $word = "";
        }
    }
} else {
    $title_site = "TẤT CẢ PHIM";
    $word = "Chào Mừng Bạn Đến Với Danh Sách Phim Của Easy-Ticket";
}
$VIEW_NAME = "phim/tiem-kiem-ui.php";

if (exist_param('all')) {
    $items = movie_page();
}

if(exist_param('categories_movies')){

$items = movies_by_categories($id);
// $title = "Chào Mừng Bạn Đến Với Phim Của EASY TICKET";

$VIEW_NAME = "loai_phim.php";
}
// $items = movies_select_all();
require '../layout.php';
