
	<link rel="stylesheet" href="css/style.css">

	<!-- <section class="ftco-section"> -->
		<div class="container ">
			
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6">
					<div class="login-wrap">

						<div class="img" style="background-image: url(<?= $CONTENT_URL ?>/assets/img/logo_url.png)"></div>
						<h3 class="text-center   mb-4">Đăng Ký Tài Khoản</h3>
						<form method="post" enctype="multipart/form-data"  action="<?=$SITE_URL?>/form/signup_xuly.php" id='my_form' class="signup-form" >
							<div class='row'>
								<div class="col-sm-6 form-group   mb-4">
									<input type="text" class="form-control" id='username' name='username' placeholder="Tài Khoản">
									<span class='text-danger err'><?= (isset($loi))? $loi : ""; ?></span>
								</div>

								<div class="col-sm-6 form-group  mb-4">
									<input type="text" class="form-control" id="full_name" name='full_name' placeholder="Họ Tên">
									<span class='text-danger err'></span>
								</div>
							</div>



							<div class="form-group  mb-4">
								<input type="text" class="form-control" id='thong_tin' name='information' placeholder="Gmail Hoặc Số Điện Thoại">
                                <span class='text-danger err'></span>
							</div>
							<div class="form-group  mb-4">
								<input type="password" id="password" class="form-control" name='password' placeholder="Mật Khẩu">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								<span class='text-danger err'></span>
							</div>
                            <div class="form-group  mb-4">
								<input type="password" id="confirm_pass" class="form-control" name='confirm_pass' placeholder="Xác Nhận Mật Khẩu">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								<span class='text-danger err'></span>
							</div>
							<div class="form-group  mb-4">
								<input type="file" class="form-control" id="image" name="image">

                                <span class='text-danger err'></span>
							</div>
                        <div class='form-group '>
                        <label class="fw-bold col-form-label">Giới Tính </label>
                                <div class=' p-2 rounded-pill form-control ' >
                                    <input type="radio" class="gender mx-lg-2" name="gender" value="0"> Nam
                                    <input type="radio" class="ml-md-2 gender mx-lg-2" name="gender" value="1"> Nữ

                                </div>
                                <span class='text-danger err'></span>
                        </div>
                                <span class="error text-danger"></span>
							<div class="form-group">
								<button type="submit" name="submit_insert" class="form-control btn btn-primary submit px-3">Đăng
									Ký</button>
							</div>
							<i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
						</form>
						<p>Bạn Đã Có Tài Khoản! <a href="<?= $SITE_URL ?>/form/login_xuly.php">Đăng Nhập</a></p>
					</div>
				</div>
			</div>
		</div>



<script>
    

    const check_form = document.querySelector('#my_form');
    check_form.addEventListener('submit', function(event) {
        let haserr = true;
		var username = document.getElementById("username").value;
        const name = document.getElementById('full_name').value;

        const password = document.getElementById('password').value;
        const confirm_password = document.getElementById('confirm_pass').value;
        var gender = document.querySelectorAll('.gender');
        // var img = document.getElementById('image');
        const err = document.getElementsByClassName('err');
        const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.(com|vn|org|gov|co)|fpt\.edu\.vn)$/;
        const sdtRegex = /^\b(03|05|07|08|09)\d{8}\b/;
        const thong_tin = document.getElementById('thong_tin').value;
        var img = document.getElementById('image');


        if (username.trim() == " " || username.length < 5) {
			err[0].innerHTML = "Tài khoản Phải trên 5 Ký Tự";
			haserr = false;

		}else{
			err[0].innerHTML = ' ';
		}

		if (name.trim() == " " || name.length < 5) {
			err[1].innerHTML = "Tên không dưới 5 ký tự";
			haserr = false;

		}else{
			err[1].innerHTML = '';
		}

        if(!sdtRegex.test(thong_tin) && !emailRegex.test(thong_tin)){
            err[2].innerHTML = "Vui Lòng Nhập Đúng";

        }else{
            err[2].innerHTML = "";
        }
		if (password.trim() == " " || password.length < 5) {

			err[3].innerHTML = "mật khẩu phải trên 5 Ký Tự";
			haserr = false;
		}else{
			err[3].innerHTML = "";
		}
        if(confirm_password != password) {
            err[4].innerHTML = "Mật Khẩu Không Trùng";
            haserr = false;
        }else{
            err[4].innerHTML = '';
        }


        if (!gender[0].checked && !gender[1].checked) {
            err[6].innerHTML = "Chọn Giới Tính";
            has_error = false;
        }else{
            err[6].innerHTML = '';
        }

        if (haserr == false) {
            event.preventDefault(); 
        }
    });
</script>