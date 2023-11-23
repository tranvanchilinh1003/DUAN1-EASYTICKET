<?php
require "../../model/pdo.php";
require "../../model/user.php";
require '../../global.php';
// require "../../model/loai.php";




if (isset ($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = khach_hang_select_by_id($username);

    if ($user && $user['is_hidden'] == 1) {
        if ($user['password'] == md5($password)) {
            header("Location: ".$ADMIN_URL."/form/login.php");
            $_SESSION['img'] = $user['image'];
            $_SESSION["username"] = $username;
            if ($user['role'] == 1) {
                header('location: ' . $ADMIN_URL . '/trang-chinh/');
            }
            if (isset($_SESSION['request_uri'])) {

                header("Location:" . $_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
            header("Location: ".$ADMIN_URL."/form/login.php");
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
        header("Location: ".$ADMIN_URL."/form/login.php");
    }
} 

