<?php
// kiểm tra lỗi php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
extract($_REQUEST);
require '../../global.php';
require '../../model/pdo.php';
require '../../model/movies.php';
require '../../model/categories.php';
//-------------------------------//
extract($_REQUEST);
if (exist_param("keyword")) {
    if (isset($_POST["search"])) {
        if ($keyword == '') {
            $title_site = "Tất cả sản phẩm";
        } else {
            $title_site = "Các sản phẩm có chứa từ khóa :'$keyword'";
        }
        $items = movies_select_keyword($keyword);
        if (count($items) == 0) {
            $title_site = "Không sản phẩm nào chứa từ khóa :'$keyword'";
        }
    }
} else {
    $title_site = "PHIM ĐẶC BIỆT";
}
$VIEW_NAME = "phim/tiem-kiem-ui.php";

require '../layout.php';
