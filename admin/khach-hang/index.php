<?php
// session_start();
require "../../global.php";
require "../../model/user.php";
// require "../../model/pdo.php";

extract($_REQUEST);
if (exist_param("btn_insert")) {
    $username = $_POST['username'];
    $password1 = $_POST['password'];
    $full_name = $_POST['full_name'];
    $image = save_file('image', $UPLOAD_URL);
    $information = $_POST['information'];


    $password = md5($password1);
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    $items = khach_hang_sellect_all();
    khach_hang_select_by_id($username);
    $loi = khach_hang_exist($username);
    $is_hidden = 1;
    if (!empty($loi)) {
        $MESSAGE = "Tài Khoản Đã Tồn Tại";
        $VIEW_NAME = 'insert.php';
    } else {

        if ($image != '') {
            $VIEW_NAME = "list.php";
            khach_hang_insert($username, $information, $password, $image, $role, $full_name, $gender);
        } else {
            khach_hang_insert($username, $information, $password, $image = 'anh_dai_dien.jpg', $role, $full_name, $gender);
            $VIEW_NAME = "list.php";
        }
    }
} else if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete")) {
    remove_hidden_user($id);


    $items = khach_hang_sellect_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {

    //     //  lấy dữ liệu form
    $username = $_REQUEST['username'];
    $info_user = khach_hang_select_by_id($username);

    $items = khach_hang_sellect_all();

    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_update")) {
    $username = $_POST['username'];

    $password1 = $_POST['password'];
    $full_name = $_POST['full_name'];
    $image = save_file('image', $UPLOAD_URL);
    $information = $_POST['information'];
    khach_hang_select_by_id($username);

    $password = md5($password1);
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    if (empty($image)) {
        $image = $_POST['image_old'];
        khach_hang_update($information, $password, $image, $role, $full_name, $gender, $username);
    } else {
        $image = save_file('image', $UPLOAD_URL);
        khach_hang_update($information, $password, $image, $role, $full_name, $gender, $username);
    }
    

    // $items = khach_hang_sellect_all();
    $VIEW_NAME = 'list.php';

    // elseif (exist_param("delete_box")) {

    //     if (isset($_POST['delete_all'])) {

    //         $get_id = $_POST['check'];
    //         if (isset($get_id)) {
    //             foreach ($get_id as $id) {
    //                 khach_hang_delete($id);
    //             }
    //             header("location: index.php?btn_list");
    //         } else {

    //             header("location: index.php?btn_list");
    //         }
    // }
} else if (exist_param("history")) {

    $VIEW_NAME = 'history.php';
} else if (exist_param("reset_user")) {
    reset_user($id);
    $VIEW_NAME = 'history.php';
} else if (exist_param("remove_vv")) {
    

    khach_hang_delete($id);

    $VIEW_NAME = 'history.php';
} else {
    // $loai_hang = loai_selectall();
    $VIEW_NAME = "insert.php";
}
require "../layout.php";
