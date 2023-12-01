
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    
	<!--===============================================================================================-->


	<div class="limiter">
		<div class="container-login100" style="border: grey;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 border bg-light my-5">
				<form class="login100-form validate-form" method='post' action="<?=$SITE_URL?>/form/quen_mk_xuly.php" onsubmit="return check_form();">
					<span class="login100-form-title p-b-49 font-weight-bold">
						Quên Mật Khẩu
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<!-- <span class="label-input100">Tên Đăng Nhập</span> -->
						<input class="input100"  type="text" id="username" name="username" placeholder="Tài Khoản">
						<span class="focus-input100"  data-symbol="&#xf206;"></span>
						
					</div>
					<span class='text-danger err' ></span>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<!-- <span class="label-input100">Mật Khẩu</span> -->
						<input class="input100" type="text" id="information" name="information" placeholder="Gmail Hoặc Số Điện Thoại.." >
						<span class="focus-input100"  data-symbol="&#9993;"></span>
					</div>
					<span class='text-danger err' ></span>

					<div class="text-right p-t-8 p-b-31">
						
					</div>

					<div class="container-login100-form-btn mb-5">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name='btn_forgot' class="login100-form-btn">
								Lấy Lại Mật Khẩu
							</button>
						</div>
					</div>

					

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->


<script>
	function check_form() {

		var err = document.getElementsByClassName("err");
		var username = document.getElementById("username").value;
		const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.(com|vn|org|gov|co)|fpt\.edu\.vn)$/;
        const sdtRegex = /^\b(03|05|07|08|09)\d{8}\b/;
		var information =document.getElementById("information").value;
		err[0].innerHTML = "";
		err[1].innerHTML = "";
		
		if (username.trim() == " " || username.length < 5) {
			err[0].innerHTML = "Không Để Trống Hoặc Dưới 5 Ký Tự";
			return false;

		}if(!sdtRegex.test(information) && !emailRegex.test(information)){
            err[1].innerHTML = "Vui Lòng Nhập Đúng";
			return false;
        }


		return true;
	}
</script>