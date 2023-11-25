<style>
    .form-control:focus {
color: white;
}
</style>
<div class="container">
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quảng Lý Khách Hàng</h3>
            </div>
            <div class="card-body">
                <div class="table">
                    <form class="form" action="./index.php" method="post" id="form_control" enctype="multipart/form-data">
                        <div class='row mt-2'>
                            <div class="col-sm-4">
                                <label for="username" class="fw-bold col-form-label text-white">Tài Khoản</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Tài Khoản...">
                                <span class="error text-danger"></span>
                                <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                            </div>
                            <div class="col-sm-4">
                                <label for="full_name" class="fw-bold col-form-label text-white">Họ Và Tên</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder='Họ Và Tên...'>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="password" class="fw-bold col-form-label text-white">Mật Khẩu</label>
                                <input type="password" class="form-control " id="password" name="password" placeholder='Mật Khẩu...'>
                                <span class="error text-danger"></span>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class="col-sm-4">
                                <label for="thong_tin" class="fw-bold col-form-label text-white">Email Hoặc SĐT</label>
                                <input type="text" class="form-control" id='thong_tin' name='information' placeholder='Gmail Hoặc Số Điện Thoại...'>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="image" class="fw-bold col-form-label text-white">Hình ảnh</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="comfirm_password" class="fw-bold col-form-label text-white">Xác Nhận Mật Khẩu</label>
                                <input type="password" class="form-control" id="comfirm_password" name="comfirm_password" placeholder='Xác Nhận Mật Khẩu...'>
                                <span class="error text-danger"></span>
                            </div>





                        </div>
                        <div class='row mt-3'>
                            
                            <div class="col-sm-4">
                                <label class="fw-bold col-form-label text-white">Vai Trò </label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="" name="role" value="0"> Khách Hàng
                                    <input type="radio" class="ml-md-2" name="role" value="1" checked> Nhân Viên
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="fw-bold col-form-label text-white">Giới Tính </label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="gender" name="gender" value="0"> Nam
                                    <input type="radio" class="ml-md-2 gender" name="gender" value="1"> Nữ

                                </div>
                                <span class="error text-danger"></span>
                            </div>

                        </div>

                        <br>
                        <div class="border-top ">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="btn_insert" value="Thêm mới">
                                <button type="reset" class="btn btn-outline-pinterest p-3 mx-xl-3" name="clear_form">Nhập lại</button>

                            </div>
                        </div>

                    </form>




                </div>

            </div>

        </div>
    </div>
</div>
<script>
    var form_insert = document.getElementById("form_control");
    form_insert.addEventListener('submit', function(e) {
        var user = document.getElementById('username').value;
        var name = document.getElementById('full_name').value;
        var password = document.getElementById('password').value;
        var thong_tin = document.getElementById('thong_tin').value;
        var comfirm_password = document.getElementById('comfirm_password').value;
        var gender = document.querySelectorAll('.gender');
        
        var error = document.getElementsByClassName("error");


        var has_error = true;
        const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.(com|vn|org|gov|co)|fpt\.edu\.vn)$/;
        const sdtRegex = /^\b(03|05|07|08|09)\d{8}\b/;
        error[0].innerHTML = '';
        error[1].innerHTML = '';
        error[2].innerHTML = '';
        error[3].innerHTML = '';
        error[4].innerHTML = '';
        error[5].innerHTML = '';
    
        
        if (user.trim() == " " || user.length < 5) {
            error[0].innerHTML = "không để trống hoặc dưới 5 ký tự";
            has_error = false

        }
        if (name.trim() == " " || name.length < 5 || !isNaN(name)) {
            error[1].innerHTML = "không để trống hoặc dưới 5 ký tự";
            has_error = false

        }
        if(!sdtRegex.test(thong_tin) && !emailRegex.test(thong_tin)){
            error[3].innerHTML = "Vui Lòng Nhập Đúng";
            has_error =false;

        }
    

        if (password.trim() == '' || password.length < 5) {
            error[2].innerHTML = "không để trống hoặc dưới 5 ký tự";
            has_error = false
        }
        if (comfirm_password != password) {
            error[5].innerHTML = "Mật Khẩu Không Trùng khớp";
            has_error = false;
        }

    
        if (!gender[0].checked && !gender[1].checked) {
            error[6].innerHTML = "Chọn Giới Tính";
            has_error = false;
        }

        if (has_error == false) {
            e.preventDefault();
        }
    });
</script>
