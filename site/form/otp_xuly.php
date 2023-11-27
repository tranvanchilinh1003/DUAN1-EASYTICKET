<?php
require "../../model/pdo.php";
require "../../model/user.php";
require "../../global.php";



extract($_REQUEST);
$VIEW_NAME = "login/otp.php";


if(exist_param('nhap_otp')){
    $VIEW_NAME="form/otp.php";
$otp = $_POST['otp'];

if($otp == $_SESSION['otp']){

$VIEW_NAME = "reset_password.php";

}else{
$MESSAGE = " Mã OTP Không Trùng!";
$VIEW_NAME="form/otp.php";
}


}

require '../layout.php';


