<?php
require_once "../../global.php";
require_once "../../model/pdo.php";
require_once "../../model/movies.php";
require_once "../../model/categories.php";
require_once "../../model/user.php";
require_once "../../model/statistical.php";


$count_categories = count(categories_select_all());
$count_movie = count(movies_select_all());
$count_user = count(khach_hang_sellect_all ());
$count_statistical = count(comments_select_all());
$VIEW_NAME = "trang-chinh/home.php";


if(exist_param('profile')){
    $username = $_SESSION['username'];
    $user = user_id($username);

    $VIEW_NAME = "profile.php";
}else if(exist_param("update_admin")){
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
    $VIEW_NAME = "profile.php";
  }else{
  if(empty($image)){
    $image = $_POST['image_old'];
    khach_hang_update($information,$password,$image,$role=1,$full_name,$gender,$username);
header("location: ".$ADMIN_URL."/trang-chinh/index.php?profile");
  }else{
    $image = save_file('image', $UPLOAD_URL);
    khach_hang_update($information,$password,$image,$role=1,$full_name,$gender,$username);
header("location: ".$ADMIN_URL."/trang-chinh/index.php?profile");
    
  }
  if(empty($password)){
  
    $password = $_POST['password_old'];
    khach_hang_update($information,$password,$image,$role=1,$full_name,$gender,$username);
header("location: ".$ADMIN_URL."/trang-chinh/index.php?profile");
  }else{
    $password = MD5($_POST['password']);
    khach_hang_update($information,$password,$image,$role=1,$full_name,$gender,$username);
    header("location: ".$ADMIN_URL."/trang-chinh/index.php?profile");
  }
    
  }
}
require "../layout.php";
