
<div class="container">
    <div class="container-fluid">
    <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quảng Lý Khách Hàng</h3>

            </div>
            <div class="card-body">
                <div class="table">
                    <form class="form" action="./index.php" method="post" id="isert_form" enctype="multipart/form-data">
                        <div class='row mt-2'>
                            <div class="col-sm-4">
                                <label for="username" class="fw-bold col-form-label text-white">Tài Khoản</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Tài Khoản...">
                                <span class="error text-danger"></span>
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
                                <label for="email" class="fw-bold col-form-label text-white">Địa Chỉ Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder='Gmail...'>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="image" class="fw-bold col-form-label text-white">Hình ảnh</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="mat_khau2" class="fw-bold col-form-label text-white">Xác Nhận Mật Khẩu</label>
                                <input type="password" class="form-control" id="mat_khau2" name="mat_khau2" placeholder='Xác Nhận Mật Khẩu...'>
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


                        </div>


                        <div class="border-top">
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
<!-- <script>
    function unsubmut() {
        // event.preventDefault();
        var ma_kh = document.getElementById("ma_kh").value;
        var pass = document.getElementById("mat_khau").value;
        var confim_pass = document.getElementById("mat_khau2").value;
var ho_ten =document.getElementById("ho_ten").value;
        var err = document.getElementsByClassName("error");

        err[0].innerHTML = "";
        err[1].innerHTML = "";
        err[2].innerHTML = "";
        err[3].innerHTML = "";
        if (ma_kh.trim() === '') {

            err[0].innerHTML = 'Mã Khách Hàng Không Được Rỗng';
            return false;
        }
        else if(ho_ten.trim()=='' || ho_ten.length < 3 ){

            err[1].innerHTML = 'Họ tên không để trống và dưới 3 ký tự';
            return false;
        }
        
        else if (pass.trim() === ' ' || pass.length < 5) {

            err[2].innerHTML = 'Vui Lòng Nhập Pass Từ 5 kí tự';
            return false;

        } else if (confim_pass.trim() === '' || confim_pass != pass) {

            err[3].innerHTML = 'Xác Nhận Pass Chưa Giống Hoặc Trống';
            return false;


        }


        return true;
    }
    // this.submit();

    // });
</script> -->