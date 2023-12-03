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

//-------------------------------//

extract($_REQUEST);
if (exist_param("dat-ve")) {
    movies_view($id);
    $item = detail_movies($id);
    $_SESSION['id'] = $item['id'];
    $VIEW_NAME = "dat-ve-ui.php";
}
$VIEW_NAME = "dat-ve-ui.php";
require '../layout.php';
