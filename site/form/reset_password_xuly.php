<?php
require "../../model/pdo.php";
require "../../model/user.php";
require "../../global.php";

extract($_REQUEST);
$VIEW_NAME = "form/reset_password.php";



if(exist_param('doi')){
$username= $_SESSION['username'];
$mat_khau_moi =md5( $_POST['password']);
// extract($ma_kh);

khach_hang_change_password($username, $mat_khau_moi);

?>
<script>
    var thong_bao = alert ("Đổi Mật Khẩu Thành Công!");
    
        window.location.href = "<?=$SITE_URL?>/form/login_xuly.php";
    
</script>

<?php

}

require '../layout.php';


