<style>
	/* body {
		margin-top: 20px;
		color: #bcd0f7;
		background: #1A233A;
	} */

	.account-settings .user-profile {
		margin: 0 0 1rem 0;
		padding-bottom: 1rem;
		text-align: center;
	}

	.account-settings .user-profile .user-avatar {
		margin: 0 0 1rem 0;
	}

	.account-settings .user-profile .user-avatar img {
		width: 90px;
		height: 90px;
		-webkit-border-radius: 100px;
		-moz-border-radius: 100px;
		border-radius: 100px;
	}

	.account-settings .user-profile h5.user-name {
		margin: 0 0 0.5rem 0;
	}

	.account-settings .user-profile h6.user-email {
		margin: 0;
		font-size: 0.8rem;
		font-weight: 400;
	}

	.account-settings .about {
		margin: 1rem 0 0 0;
		font-size: 0.8rem;
		text-align: center;
	}

	.card {
		background: #272E48;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		border: 0;
		margin-bottom: 1rem;
	}

	.form-control {
		border: 1px solid #596280;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		font-size: .825rem;
		background: #1A233A;
		color: #bcd0f7;
        
	}

</style>



	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" >
			<div class="card h-100 ">
				<div class="card-body" style="background-color: #191c24;">
					<div class="account-settings " >
						<div class="user-profile">
							<div class="user-avatar">
								<a href="#" data-toggle="modal" data-target="#informationModal"> <img src="../../img/<?= $user['image'] ?>" alt="Maxwell Admin">
									<p class="text-center text-body text-muted">Phóng to ảnh</p></img>
								</a>
							</div>
							<h5 class="text-light">Tên đăng nhập</5>
								<h5 class="user-name text-warning"><?= $user['username'] ?></h5>
								<!-- <h6 class="user-email">yuki@Maxwell.com</h6> -->
						</div>
						<div class="about">
							<!-- <h5 class="mb-2 text-primary">About</h5> -->
							<!-- <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
			<div class="card h-100" style="background-color: #191c24;">
				<div class="card-body">
					<form action="index.php" method="POST" enctype="multipart/form-data" id='form_update'>
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<h4 class="mb-3 text-warning">Thông Tin Tài Khoản</h4>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group text-light">
									<label for="fullName">Tài Khoản</label>
									<input type="text" class="form-control bg-transparent" style="background-color: #1A223A;" name="username" id="fullName" readonly value="<?= $user['username'] ?>">

								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group text-light">
									<label for="full_Name">Họ và Tên</label>
									<input type="text" class="form-control bg-transparent" id="full_Name" name="full_name" value="<?= $user['full_name'] ?>">
									<span class='error text-danger'></span>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group text-light">
									<label for="information">Email hoặc Số điện thoại</label>
									<input type="text" class="form-control bg-transparent" id="information" name="information" value="<?= $user['information'] ?>">
									<span class='error text-danger'></span>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group text-light">
									<label for="confirm_pass">Mật Khẩu Của Bạn</label>
									<input type="password" class="form-control bg-transparent" name="confirm_pass" id="confirm_pass" value="">
									<span class='error text-danger'></span>
									<i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group text-light">
									<label for="website">Giới tính</label>
									<!-- <input type="url" class="form-control" id="website" placeholder="Website url"> -->
									<div class=' p-1 d-lg-block border-right-2 bg-transparent' style="background: #1A233A; border: 1px solid #596280;">
										<input type="radio" class="gender " name="gender" value="0" <?php echo ($user['gender']) == 0 ? "checked" : "" ?>> Nam
										<input type="radio" class="ml-md-2 gender" name="gender" value="1" <?php echo ($user['gender']) == 1 ? "checked" : "" ?>> Nữ
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group text-light">
									<label for="password">Mật Khẩu Mới</label>
									<input type="password" class="form-control bg-transparent" id="password" name="password" placeholder='Nhập Để Đổi Mật Khẩu Hoặc Bỏ Trống'>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group text-light">
									
									<input type="hidden" class="form-control" id="password_old" name="password_old" value='<?=$user['password'] ?>'>
								</div>
							</div>
						</div>
						<div class="row gutters text-light">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group ">
									<label for="image">Ảnh đại diện</label>
									<input type="file" class="form-control bg-transparent" name="image" id="image" value="<?=$user['image'] ?>">
									<input type="hidden" class="form-control p-1" name="image_old" value="<?=$user['image'] ?>">
								</div>
							</div>
						</div>
						<hr class="tabl-light border-top">


						<div class="row gutters ">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="text-right">

									<button type="submit" id="submit" name="update_admin" class="btn btn-danger">Cập nhập</button>
								</div>
							</div>
						</div>

					</form>
				</div>





			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- Modal image đại diện-->
<div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="informationModal" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h5 class="modal-title" id="informationModalLabel"><?= $user['username'] ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<img class="img-fluid" src="../../img/<?= $user['image'] ?>" />
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>


<script>
	var form_update = document.getElementById('form_update');
	form_update.addEventListener('submit', function(event) {
		var errors = document.getElementsByClassName('error');

		var fullName = document.getElementById('full_Name').value;
		var confirm_pass = document.getElementById('confirm_pass').value;
		var information = document.getElementById('information').value;
		const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.(com|vn|org|gov|co)|fpt\.edu\.vn)$/;
		const sdtRegex = /^\b(03|05|07|08|09)\d{8}\b/;
		var has_err = true;
		if (fullName.trim() == "" || fullName.length < 5) {
			errors[0].innerHTML = "Không Để Trống Hoặc dưới 5 Ký Tự";
			has_err = false;
		} else {
			errors[0].innerHTML = "";
		}
		if (confirm_pass.trim() == "" || fullName.length < 5) {
			errors[2].innerHTML = "Không Để Trống Hoặc dưới 5 Ký Tự";
			has_err = false;
		} else {
			errors[2].innerHTML = "";
		}
		if (!sdtRegex.test(information) && !emailRegex.test(information)) {
			errors[1].innerHTML = "Vui Lòng Nhập Đúng";

		} else {
			errors[1].innerHTML = "";
		}






		if (has_err == false) {
			event.preventDefault();
		}
	});
</script>