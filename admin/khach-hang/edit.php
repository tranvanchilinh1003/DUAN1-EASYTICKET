<style>
    .form-control:focus {
        color: white;
    }
</style>
<div class="page-header">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list">Danh Sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="container-fluid">
        <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quảng Lý Khách Hàng</h3>

            </div>
            <div class="card-body">
                <div class="table">
                    <form class="form" action="./index.php" method="post" id="update" enctype="multipart/form-data">
                        <div class='row mt-2'>
                            <div class="col-sm-4">
                                <label for="username" class="fw-bold col-form-label text-white">Tài Khoản</label>
                                <input type="text" class="form-control " style="background-color: #2A3038;" id="username" name="username" readonly value="<?= $info_user['username'] ?>">

                            </div>
                            <div class="col-sm-4">
                                <label for="full_name" class="fw-bold col-form-label text-white">Họ Và Tên</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" value="<?= $info_user['full_name'] ?>">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="password" class="fw-bold col-form-label text-white">Mật Khẩu</label>
                                <input type="password" class="form-control " id="password" name="password">
                                <span class="error text-danger"></span>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class="col-sm-4">
                                <label for="thong_tin" class="fw-bold col-form-label text-white">Email Hoặc SĐT</label>
                                <input type="text" class="form-control" id='thong_tin' name='information' value="<?= $info_user['information'] ?>">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="image" class="fw-bold col-form-label text-white">Hình ảnh</label>
                                <input type="file" class="form-control" id="image" name="image" value='<?= $info_user['image'] ?>'>
                                <input type="hidden" name="image_old" id="" value='<?= $info_user['image'] ?>'>

                            </div>
                            <div class="col-sm-4">
                                <label for="mat_khau2" class="fw-bold col-form-label text-white">Xác Nhận Mật Khẩu</label>
                                <input type="password" class="form-control" id="mat_khau2" name="mat_khau2">
                                <span class="error text-danger"></span>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class="col-sm-4">
                                <label for="phone" class="fw-bold col-form-label text-white">Số Điện Thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder='Số Điện Thoại...'>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label class="fw-bold col-form-label text-white">Vai Trò </label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="" name="role" value="0" <?php echo ($info_user['role']) == 0 ? "checked" : "" ?>> Khách Hàng
                                    <input type="radio" class="ml-md-2" name="role" value="1" <?php echo ($info_user['role']) == 1 ? "checked" : "" ?>> Nhân Viên
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="fw-bold col-form-label text-white">Giới Tính </label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="gender" name="gender" value="0" <?php echo ($info_user['gender']) == 0 ? "checked" : "" ?>> Nam
                                    <input type="radio" class="ml-md-2 gender" name="gender" value="1" <?php echo ($info_user['gender']) == 1 ? "checked" : "" ?>> Nữ
                                </div>
                                <span class="error text-danger"></span>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="btn_update" value="Cập Nhật">
                                <a href="index.php?btn_list" class="btn btn-outline-warning p-3 mx-xl-3" name="list">Danh sách</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    function unsubmut() {
        // event.preventDefault();
        var ma_kh = document.getElementById("ma_kh").value;
        var pass = document.getElementById("mat_khau").value;
        var confim_pass = document.getElementById("mat_khau2").value;
        var ho_ten =document.getElementById("ho_ten").value;
        var err = document.getElementsByClassName("error");

        var name = document.getElementById('full_name').value;
        var password = document.getElementById('password').value;
        var thong_tin = document.getElementById('thong_tin').value;
        var comfirm_password = document.getElementById('comfirm_password').value;
        var error = document.getElementsByClassName("error");
        var has_error = true;
        const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.(com|vn|org|gov|co)|fpt\.edu\.vn)$/;
        const sdtRegex = /^\b(03|05|07|08|09)\d{8}\b/;
        error[0].innerHTML = '';
        error[1].innerHTML = '';
        error[2].innerHTML = '';
        error[3].innerHTML = '';
        error[4].innerHTML = '';
        if (name.trim() == " " || name.length < 5 || !isNaN(name)) {
            error[0].innerHTML = "không để trống hoặc dưới 5 ký tự";
            has_error = false
        }
        if (!sdtRegex.test(thong_tin) && !emailRegex.test(thong_tin)) {
            error[2].innerHTML = "Vui Lòng Nhập Đúng";
            hass_error = false;
        }
        if (password.trim() == '' || password.length < 5) {
            error[1].innerHTML = "không để trống hoặc dưới 5 ký tự";
            has_error = false
        }
        if (comfirm_password != password) {
            error[3].innerHTML = "Mật Khẩu Không Trùng khớp";
            has_error = false;
        }
        if (has_error == false) {
            e.preventDefault();
        }
    });
</script>