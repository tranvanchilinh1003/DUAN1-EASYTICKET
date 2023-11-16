<div class="container">
    <div class="container-fluid">
        <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quản lý loại</h3>
            </div>
            <div class="card-body">
                <div class="table">
                    <form class="form" action="./index.php" method="post" id="isert_form" enctype="multipart/form-data">
                        <div class=''>
                            <div class="col-sm-12">
                                <label for="username" class="fw-bold col-form-label text-white">Mã loại</label>
                                <input type="text" class="form-control  m-auto " style="background-color: #2A3038;" id="id" name="id" placeholder="Auto Munber" disabled>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-12">
                                <label for="full_name" class="fw-bold col-form-label text-white">Tên loại</label>
                                <input type="text" class="form-control  m-auto" id="type_name" name="type_name" placeholder='Tên loại...'>
                                <span class="error text-danger"></span>
                            </div>
                        </div>
                        <br>
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