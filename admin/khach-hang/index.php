<?php
// session_start();
require "../../global.php";
// require_once '../../dao/loai.php';
// require_once "../../dao/pdo.php";
// require_once "../../dao/khach-hang.php";

extract($_REQUEST);
if (exist_param("btn_insert")) {
//     $ma_kh = $_POST['ma_kh'];
//     $mat_khau1 = $_POST['mat_khau'];
//     $ho_ten = $_POST['ho_ten'];
//     $kich_hoat = $_POST['kich_hoat'];
//     $hinh = save_file('hinh', $UPLOAD_URL);
//     $email = $_POST['email'];
//     $vai_tro = $_POST['vai_tro'];

// $mat_khau = md5($_POST['mat_khau']);
// $_SESSION['mat_khau'] = $mat_khau1;
//     // $items = khach_hang_sellect_all();
//     // $loi = khach_hang_exist($ma_kh);


//     if ($loi) {
//         $MESSAGE = "Tài Khoản Đã Tồn Tại";
//         $VIEW_NAME = "add.php";
//     } else {




//     khach_hang_insert($ma_kh, $mat_khau , $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
//     $VIEW_NAME = "list.php";
//     }
    
} else if (exist_param("btn_list")) {

    $VIEW_NAME = "list.php";
// } else if (exist_param("btn_delete")) {
//     $ma_kh = $_REQUEST['ma_kh'];
//     khach_hang_delete($ma_kh);


//     $items = khach_hang_sellect_all();
//     $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {

//     //  lấy dữ liệu form
//     $ma_kh = $_REQUEST['ma_kh'];
//     $khach_hang_info = khach_hang_select_by_id($ma_kh);
//     extract($khach_hang_info);
//     $items = khach_hang_sellect_all();

    $VIEW_NAME = "edit.php";
// } else if (exist_param("btn_update")) {
//     $ma_kh = $_REQUEST['ma_kh'];
//     $mat_khau1 = $_POST['mat_khau'];
//     $ho_ten = $_POST['ho_ten'];
//     $kich_hoat = $_POST['kich_hoat'];
//     $hinh = save_file('hinh', $UPLOAD_URL);
//     $email = $_POST['email'];
//     $vai_tro = $_POST['vai_tro'];

//     $mat_khau = md5($_POST['mat_khau']);
//     if( empty($hinh) ){
//         $hinh = $_POST['hinh_old'];
//         khach_hang_update($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);
//     }else{
//         $hinh = save_file('hinh', $UPLOAD_URL);
//         khach_hang_update($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);
        
//     }
    
//     $items = khach_hang_sellect_all();
//     $VIEW_NAME = 'list.php';
// } 
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
} 

else {
    // $loai_hang = loai_selectall();
    $VIEW_NAME = "insert.php";
}
require "../layout.php";
