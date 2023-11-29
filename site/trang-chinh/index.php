<?php
// kiểm tra lỗi php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
extract($_REQUEST);
require "../../global.php";
require "../../model/categories.php";
require "../../model/pdo.php";
require "../../model/movies.php";
require "../../model/statistical.php";

if (exist_param("gioi-thieu", $_REQUEST)) {

    $VIEW_NAME = 'gioi-thieu.php';
} else if (exist_param("lien-he", $_REQUEST)) {

    $VIEW_NAME = 'lien-he.php';
} else if (exist_param("tin-tuc", $_REQUEST)) {

    $VIEW_NAME = 'tin-tuc.php';
} else if (exist_param("chi-tiet-phim")) {
    if (isset($_POST['pull_comment'])) {
        $content = $_POST['content'];
        $user_id = $_SESSION['user_id'];
        $movies_id = $_POST['movies_id'];
        $comment_date = date("Y-m-d");
        comments_insert($id,  $users_id, $movies_id, $content, $comment_date, $ratings);

        $comments_movies = comments_select_by_id_movies($movies_id);
    }
    movies_view($id);
    $VIEW_NAME = 'chi-tiet-phim.php';
} else if (exist_param("trailer", $_REQUEST)) {
    $VIEW_NAME = 'trailer.php';
} else {
    $VIEW_NAME = 'home.php';
}


require "../layout.php";
