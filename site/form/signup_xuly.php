<?php
require "../../model/pdo.php";
// require "../../global.php";
require "../../model/user.php";
require "../../global.php";
// require "../../dao/loai.php";

extract($_REQUEST);
$VIEW_NAME = "form/signup.php";
if (exist_param("submit_insert")) {
    if (isset($_POST['submit_insert'])) {
        $username = $_POST['username'];
        $password1 = $_POST['password'];
        $full_name = $_POST['full_name'];
        $image = save_file('image', $UPLOAD_URL);
        $gender = $_POST['gender'];
        $information = $_POST['information'];
        $password = md5($password1);
        $gender = $_POST['gender'];
        khach_hang_select_by_id($username);
        $loi = khach_hang_exist($username);
        if (!empty($loi)) {
        // header('Location:'.$SITE_URL.'/form/signup_xuly.php');
        $MESSAGE = "Tài Khoản Đã Tồn Tại";
            $_SESSION['user'] = $username;
            $_SESSION['full_name'] =$full_name;
            $_SESSION['gender'] = $gender;
    $_SESSION['infor'] = $information;
        } else {

            if ($image != '') {

                khach_hang_insert($username,$information,$password,$image,$role='0',$full_name,$gender);
?>
                <script>
                    var tb = alert("Đăng Ký Thành Công");
                    window.location.href = "<?= $SITE_URL ?>/form/login_xuly.php";
                </script>

            <?php


            } else {
                khach_hang_insert($username, $information, $password, $image = 'anh_dai_dien.jpg', $role = '0', $full_name, $gender);
?>
                <script>
                    var tb = alert("Đăng Ký Thành Công");
                    window.location.href = "<?= $SITE_URL ?>/form/login_xuly.php";
                </script>
<?php
            }
        }
    }
    $VIEW_NAME = "signup.php";
} else {
}
// $VIEW_NAME = "login.php";







// $dsloai = loai_selectall();

require "../layout.php";
