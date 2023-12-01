
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
				<form class="login100-form validate-form" method='post' action="<?=$SITE_URL?>/form/otp_xuly.php" id='form_otp'  >
					<span class="login100-form-title p-b-49 font-weight-bold">
					Nhập Mã OTP
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<!-- <span class="label-input100">Tên Đăng Nhập</span> -->
						<input class="input100"  type="text" id="otp" name="otp" placeholder="Mã OTP">
                        <span class='text-danger err' ><i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i></span>
						
					</div>
					
					<div class="container-login100-form-btn mb-5">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name='nhap_otp' class="login100-form-btn">
								Xác Nhận
							</button>
						</div>
					</div>

					

					
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
        var check_form_otp = document.getElementById("form_otp");
    check_form_otp.addEventListener("submit", function(e){


        var err = document.getElementsByClassName("err");
		var username = document.getElementById("otp").value;
	
		var haserr = true;
		
		
		if (username.trim() == " " || username.length != 6 || isNaN(username)) {
			err[0].innerHTML = "Không Để Trống Hoặc Khác 6 Ký Tự Số";
			haserr = false;

		}else{
            err[0].innerHTML = "";
        }

		if(haserr == false){
e.preventDefault();

        }

    })     

	
	
</script>