<?php
require "../../global.php";
require_once "../../model/pdo.php";
require_once "../../model/categories.php";

extract($_REQUEST);
if (exist_param("btn_insert")) {
    $VIEW_NAME = "loai-phim/insert.php";
    if (isset($_POST['btn_insert'])) {
        $type_name = $_POST['type_name'];
        if ($type_name != '' && empty(check_ten_categories($type_name))) {
            categories_insert($type_name);
            $VIEW_NAME = 'list.php';
        } else {
            $MESSAGE = "Loại hàng không được trống hoặc 'đã tồn tại'!";
        }
    }
} else if (exist_param("btn_list")) {
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    $id = $_REQUEST['id'];
    
    $check =check_ma_categories();
    if (empty($check)) {
        categories_delete($id);
        $MESSAGE = " ";
    } else {
        
        $MESSAGE = "Không Thể Xóa Mã Loại Này";
        // $VIEW_NAME = "list.php";
    }
    $items = categories_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $id = $_REQUEST['id'];
    $items = categories_select_by_id($id);
    extract($items);
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_update")) {
    $id = $_POST['id'];
    $type_name = $_POST['type_name'];
    categories_update($type_name, $id);
    $items = categories_select_by_id($id);
    $VIEW_NAME = "list.php";
} else {
    $items = categories_select_all();
    $VIEW_NAME = "insert.php";
}
require "../layout.php";
