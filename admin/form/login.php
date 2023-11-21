<?php
require "../../global.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Easy Ticet Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= $ADMIN_URL?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= $ADMIN_URL?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= $ADMIN_URL?>/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $CONTENT_URL ?>/assets/img/logo_url.png">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Đăng Nhập Admin</h3>
                <form action="index.php" method="post" onsubmit="return check_form();">
                  <div class="form-group">
                    <label>Tài Khoản</label>
                    <input type="text" class="form-control p_input mb-3" id="username" name="username" placeholder="Tài Khoản admin...">
                    <span class='text-danger err mb-3 font-weight-bold form-control-range' ></span>
                  <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" class="form-control p_input mb-3" id="password" name="password" placeholder="Nhập Mật Khẩu...">
                    <span class='text-danger err mb-3 font-weight-bold form-control-range' ></span>
                    
                  </div>
            
                  <div class="text-center">
                    <button type="submit" name='btn_login' class="btn btn-primary btn-block enter-btn">Đăng Nhập</button>
                  </div>
                  <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= $ADMIN_URL?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= $ADMIN_URL?>/assets/js/off-canvas.js"></script>
    <script src="<?= $ADMIN_URL?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= $ADMIN_URL?>/assets/js/misc.js"></script>
    <script src="<?= $ADMIN_URL?>/assets/js/settings.js"></script>
    <script src="<?= $ADMIN_URL?>/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
<script>
	function check_form() {

		var err = document.getElementsByClassName("err");
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		err[0].innerHTML = "";
		err[1].innerHTML = "";
		
		if (username.trim() == " " || username.length < 5) {
			err[0].innerHTML = "Không Để Trống Hoặc Dưới 5 Ký Tự";
			return false;

		}
		if(password.trim() == " " || password.length < 5){

			err[1].innerHTML = "Không Để Trống Hoặc Dưới 5 Ký Tự";
			return false;
		}
		return true;
	}
</script>