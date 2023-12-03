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

<div class="limiter">
	<div class="container-login100" style="border: grey;">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 border bg-light my-5">
			<form class="login100-form validate-form" method='post' action="<?= $SITE_URL ?>/form/signup_xuly.php" id="my_form" enctype="multipart/form-data">
				<span class="login100-form-title p-b-49 font-weight-bold">
					Đăng Ký
				</span>

				<div class="wrap-input100 validate-input m-b-23 " data-validate="Username is reauired">
					<!-- <span class="label-input100">Tên Đăng Nhập</span> -->
					<input class="input100" type="text" class="form-control" id='username' name='username' placeholder="Tài Khoản">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				
				</div><i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
				<span class='text-danger err'></span>

				<div class="wrap-input100 validate-input  mb-4" data-validate="Password is required">
					<!-- <span class="label-input100">Mật Khẩu</span> -->
					<input class="input100" type="text" class="form-control" id="full_name" name='full_name' placeholder="Họ Tên">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
				<span class='text-danger err'></span>

				<div class="wrap-input100 validate-input mb-4">
					<!-- <span class="label-input100">Mật Khẩu</span> -->
					<input class="input100" type="text" class="form-control" id='thong_tin' name='information' placeholder="Gmail Hoặc Số Điện Thoại">
					<span class="focus-input100" data-symbol="&#xf2bc;"></span>
				</div>
				<span class='text-danger err'></span>

				<div class="wrap-input100 validate-input mb-4">
					<!-- <span class="label-input100">Mật Khẩu</span> -->
					<input class="input100" type="password" id="password" class="form-control" name='password' placeholder="Mật Khẩu">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>
				<span class='text-danger err'></span>

				<div class="wrap-input100 validate-input mb-5">
					<!-- <span class="label-input100">Mật Khẩu</span> -->
					<input class="input100" type="password" id="confirm_pass" class="form-control" name='confirm_pass' placeholder="Xác Nhận Mật Khẩu">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>
				<span class='text-danger err'></span>
				<div class="wrap-input100 validate-input mb-5">
					<input type="file" id="image" name="image">
				</div>

				
				<div class="wrap-input100 validate-input mb-5">
					<label class="fw-bold col-form-label">Giới Tính </label>
					<input type="radio" class="gender mx-lg-2" name="gender" value="0"> Nam
					<input type="radio" class="ml-md-2 gender mx-lg-2" name="gender" value="1"> Nữ
					<br>
					<span class='text-danger err'></span>
				</div>


				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" name='submit_insert' class="login100-form-btn">
							Đăng Ký
						</button>
					</div>
				</div>
				<div class="txt1 text-center p-t-54 p-b-20">
					<span>
						<a href="<?= $SITE_URL ?>/form/login_xuly.php">Đăng Nhập</a>
					</span>
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
	const check_form = document.querySelector('#my_form');
	check_form.addEventListener('submit', function(event) {
		let haserr = true;
		var username = document.getElementById("username").value;
		const name = document.getElementById('full_name').value;

		const password = document.getElementById('password').value;
		const confirm_password = document.getElementById('confirm_pass').value;
		var gender = document.getElementsByName('gender');
		// var img = document.getElementById('image');
		const err = document.getElementsByClassName('err');
		const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.(com|vn|org|gov|co)|fpt\.edu\.vn)$/;
		const sdtRegex = /^\b(03|05|07|08|09)\d{8}\b/;
		const thong_tin = document.getElementById('thong_tin').value;
		var img = document.getElementById('image');


		if (username.trim() == " " || username.length < 5) {
			err[0].innerHTML = "Tài khoản Phải trên 5 Ký Tự";
			has_error = false;

		} else {
			err[0].innerHTML = ' ';
		}

		if (name.trim() == " " || name.length < 5) {
			err[1].innerHTML = "Tên không dưới 5 ký tự";
			has_error = false;

		} else {
			err[1].innerHTML = '';
		}

		if (!sdtRegex.test(thong_tin) && !emailRegex.test(thong_tin)) {
			err[2].innerHTML = "Vui Lòng Nhập Đúng";

		} else {
			err[2].innerHTML = "";
		}
		if (password.trim() == " " || password.length < 5) {

			err[3].innerHTML = "mật khẩu phải trên 5 Ký Tự";
			has_error = false;
		} else {
			err[3].innerHTML = "";
		}
		if (confirm_password != password) {
			err[4].innerHTML = "Mật Khẩu Không Trùng";
			has_error = false;
		} else {
			err[4].innerHTML = '';
		}


		if (!gender[0].checked || !gender[1].checked) {
			err[5].innerHTML = "Chọn Giới Tính";
			has_error = false;
		} else {
			err[5].innerHTML = '';
		}

		if (haserr == false) {
			event.preventDefault();
		}
	});
</script>