<?php
require "../../model/pdo.php";
require "../../model/user.php";
require "../../global.php";
// require "../../model/loai.php";

extract($_REQUEST);
$VIEW_NAME = "form/login.php";

if (exist_param("btn_login")) {
    $username = $_POST['username'];
    
    $user = khach_hang_select_by_id($username);

    if ($user && $user['is_hidden'] == 1) {
        if ($user['password'] == md5($password)) {

?>
            <script>
                var thong_bao = alert("Đăng Nhập Thành Công!");
                window.location.href = "<?= $SITE_URL ?>/trang-chinh/";
            </script>
<?php
    $_SESSION['img'] = $user['image'];
    $_SESSION['customers'] = $user['id'];
            $_SESSION["username"] = $username;
            if ($user['role'] == 1) {
                header('location: ' . $ADMIN_URL . '/trang-chinh/');
            }
            if (isset($_SESSION['request_uri'])) {

                header("Location:" . $_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }
} else {

    if (exist_param("btn_logout")) {
        unset($_SESSION['username']);
        header("location: " . $SITE_URL . "/trang-chinh/index.php");
    }
    $id = get_cookie("id");
    $password = get_cookie("password");
}


$VIEW_NAME = "form/login.php";
// $dsloai = loai_selectall();
require '../layout.php';
