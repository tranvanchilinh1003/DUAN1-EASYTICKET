<?php
require "../../global.php";
require "../../model/pdo.php";
require "../../model/statistical.php";
// kiểm tra lỗi php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

extract($_REQUEST);
if (exist_param("ma_hh")) {

    if (exist_param("btn_delete")) {
        try {
            comments_delete($ma_bl);
            $MESSAGE = "Xóa thành công";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại";
        }
    } else if (exist_param("btn_delete_all")) {
        try {
            $arr_ma_bl = $_POST['ma_bl'];
            comments_delete($arr_ma_bl);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
        // $items = binh_luan_select_by_hang_hoa($ma_hh);
        $VIEW_NAME = "detail.php";
    }

    $items = comments_select_by_movies($movies);

    if (count($items) == 0) {
        $items = thong_ke_comments();
        $VIEW_NAME = "list.php";
    } else {
        $VIEW_NAME = "detail.php";
    }
} else {
    // $items = thong_ke_comments();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
