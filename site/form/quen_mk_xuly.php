<?php

require "../../model/user.php";
require "../../global.php";
require "../../model/categories.php";

// require "../../model/pdo.php";


// Thư viện PHPMailer


// extract($_REQUEST);
$VIEW_NAME="form/quen_mk.php";

if(exist_param("btn_forgot")){
$username = $_POST["username"];
$_SESSION['tai_khoan'] = $username;
$information = $_POST["information"];
$user = khach_hang_select_by_id($username);
// extract($user);

if($user){
if($user['information'] != $information){
$MESSAGE = "Sai địa chỉ email Hoặc Số Điện Thoại!";
}
else{
// Tạo OTP ngẫu nhiên
$otp = mt_rand(100000, 999999);
$_SESSION['otp'] = $otp;
?>
<script>
    var otp_tb = alert("Mã OTP của bạn là: <?=$otp; ?>");
    
    if(otp_tb){
        <?=update_otp($otp,$username);?>
    }else{
        <?=update_otp($otp,$username);?>
    }
</script>
<?php

$VIEW_NAME = "form/otp.php";
global $username, $password;
}
}
else{
$MESSAGE = "Sai tên đăng nhập!";
}
}

require '../layout.php';









