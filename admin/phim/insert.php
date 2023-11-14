<div class="container">
    <div class="container-fluid">
        <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quản Lý Phim</h3>
            </div>
            <div class="card-body">
                <div class="table">
                    <form class="form" action="./index.php" method="post" id="isert_form" enctype="multipart/form-data">
                        <div class='row mt-2'>
                            <div class="col-sm-4">
                                <label for="id" class="fw-bold col-form-label text-white">Id</label>
                                <input type="text" class="form-control" style="background-color: #2A3038;" id="id" name="id" placeholder="Auto Number..." disabled>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="name_movie" class="fw-bold col-form-label text-white">Tên phim</label>
                                <input type="text" class="form-control" id="name_movie" name="name_movie" placeholder='Tên phim...'>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="price" class="fw-bold col-form-label text-white">Giá</label>
                                <input type="number" class="form-control " id="price" name="price" placeholder='Giá'>
                                <span class="error text-danger"></span>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class="col-sm-4">
                                <label for="time" class="fw-bold col-form-label text-white">Thời lượng</label>
                                <input type="text" class="form-control" id="time" name="time" placeholder='Thời lượng'>
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="image" class="fw-bold col-form-label text-white">Hình ảnh</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="categories" class="fw-bold col-form-label text-white">Thể loại</label>
                                    <select class="form-control" id="categories">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class="col-sm-4">
                                <label class="fw-bold col-form-label text-white">Trạng thái</label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="" name="status" value="0">Ẩn
                                    <input type="radio" class="ml-md-2" name="status" value="1" checked>Hiện
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="date_movie" class="fw-bold col-form-label text-white">Ngày</label>
                                <input type="date" class="form-control" id="date_movie" name="date_movie">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="categories" class="fw-bold col-form-label text-white">Trailer</label>
                                <input type="text" class="form-control" id="categories" name="categories">
                                <span class="error text-danger"></span>
                            </div>

                        </div>
                        <div class='row mt-3'>
                            <div class='col-sm-12'>
                                <div class="form-group">
                                    <label for="descrition">Mô tả</label>
                                    <textarea class="form-control" id="descrition" naem="descrition" rows="4"></textarea>
                                </div>
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