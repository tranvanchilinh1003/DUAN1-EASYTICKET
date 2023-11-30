<?php
require "../../global.php";
require_once "../../model/pdo.php";
require '../../model/user.php';

extract($_REQUEST);
if (exist_param("btn_edit")) {
  $username = $_SESSION['username'];
  $user = user_id($username);
  // $_SESSION['khach_hang'] = $users['id'];
  // movies_select_all();
  $VIEW_NAME = "login_thong_tin.php";
} else if (exist_param("update_user")) {
  $username = $_POST['username'];
    $user = user_id($username);
  $information = $_POST['information'];
  $confirm_pass = $_POST['confirm_pass'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];
  $image = save_file('image', $UPLOAD_URL);
  $full_name = $_POST['full_name'];
  if(md5($confirm_pass) != $_POST['password_old']){
  
    $MESSAGE = "Mật Khẩu Không Trùng!";
    $VIEW_NAME = "login_thong_tin.php";
  }else{
  if(empty($image)){
    $image = $_POST['image_old'];
    khach_hang_update($information,$password,$image,$role=0,$full_name,$gender,$username);
header("location: ".$SITE_URL."/form/login_xu_ly_thong_tin.php?btn_edit");
  }else{
    $image = save_file('image', $UPLOAD_URL);
    khach_hang_update($information,$password,$image,$role=0,$full_name,$gender,$username);
header("location: ".$SITE_URL."/form/login_xu_ly_thong_tin.php?btn_edit");
    
  }
  if(empty($password)){
  
    $password = $_POST['password_old'];
    khach_hang_update($information,$password,$image,$role=0,$full_name,$gender,$username);
header("location: ".$SITE_URL."/form/login_xu_ly_thong_tin.php?btn_edit");
  }else{
    $password = MD5($_POST['password']);
    khach_hang_update($information,$password,$image,$role=0,$full_name,$gender,$username);
    header("location: ".$SITE_URL."/form/login_xu_ly_thong_tin.php?btn_edit");
  }
    
  }
}
require "../layout.php";
