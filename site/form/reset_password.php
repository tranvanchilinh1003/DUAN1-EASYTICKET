
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
                <form class="login100-form validate-form" action="<?=$SITE_URL?>/form/reset_password_xuly.php" method='post' id='form_pass'>
                    <span class="login100-form-title p-b-49 font-weight-bold">
                        Đổi Mật Khẩu
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <!-- <span class="label-input100">Tên Đăng Nhập</span> -->
                        <input class="input100" type="text" id="mat_khau" name="password" placeholder="Nhập Mật Khẩu Mới">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        <span class='text-danger err'></span>

                    </div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <!-- <span class="label-input100">Tên Đăng Nhập</span> -->
                        <input class="input100" type="password" id="mat_khau2" name="mat_khau2" placeholder="Xác Nhận Mật Khẩu">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        <span class='text-danger err'></span>

                    </div>

                    <div class="container-login100-form-btn mb-5">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" name='doi' class="login100-form-btn">
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
    var check_form_otp = document.getElementById("form_pass");
    check_form_otp.addEventListener("submit", function(e) {


        var err = document.getElementsByClassName("err");
        var password = document.getElementById("mat_khau").value;
        var pass2 = document.getElementById("mat_khau2").value;
        var haserr = true;


        if (password.trim() == " " || password.length < 5) {
            err[0].innerHTML = "Không Để Trống Dưới 5 Ký Tự ";
            haserr = false;

        } else {
            err[0].innerHTML = "";
        }

        if (pass2.trim() == " " || pass2 != password) {
            err[1].innerHTML = "Mật Khẩu Không Trùng Khớp ";
            haserr = false;
        } else {
            err[1].innerHTML = "";
        }

        if (haserr == false) {
            e.preventDefault();

        }

    });
</script>