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


<div class="container my-5">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
				<div class="card-body">
					<div class="account-settings">
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
			<div class="card h-100">
				<div class="card-body">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-3 text-warning">Thông tin người dùng</h6>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group text-light">
								<label for="fullName">Họ và Tên</label>
								<input type="text" class="form-control" id="fullName" value="<?= $user['full_name'] ?>">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group text-light">
								<label for="information">Email hoặc Số điện thoại</label>
								<input type="text" class="form-control" id="information" value="<?= $user['information'] ?>">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group text-light">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" value="">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group text-light">
								<label for="website">Giới tính</label>
								<!-- <input type="url" class="form-control" id="website" placeholder="Website url"> -->
								<div class=' p-1 d-lg-block border-right-2' style="background: #1A233A; border: 1px solid #596280;">
									<input type="radio" class="gender" name="gender" value="0" <?php echo ($user['gender']) == 0 ? "checked" : "" ?>> Nam
									<input type="radio" class="ml-md-2 gender" name="gender" value="1" <?php echo ($user['gender']) == 1 ? "checked" : "" ?>> Nữ
								</div>
							</div>
						</div>
					</div>
					<div class="row gutters text-light">
						<!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-3 text-warning">Khác</h6>
						</div> -->
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group ">
								<label for="image">Ảnh đại diện</label>
								<input type="file" class="form-control p-1" id="image">
							</div>
						</div>
						<!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="ciTy">City</label>
								<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="sTate">State</label>
								<input type="text" class="form-control" id="sTate" placeholder="Enter State">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="zIp">Zip Code</label>
								<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
							</div>
						</div> -->
					</div>
					<hr class="tabl-light border-top">
					<div class="row gutters ">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-right">

								<button type="button" id="submit" name="submit" class="btn btn-danger">Cập nhập</button>
							</div>
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
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>