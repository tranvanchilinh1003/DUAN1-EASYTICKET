
<div class="container">
    <div class="container-fluid">
        <!-- <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i> -->
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quản lý Phòng</h3>
            </div>

            <div class="card-body">
                <div class="table">
                    <form class="form" action="<?= $ADMIN_URL ?>/phong/index.php" method="post" id="rum_form" enctype="multipart/form-data">
                        <div class=''>
                            
                            <div class="col-sm-12">
                                <!-- <label for="id" class="fw-bold col-form-label text-white">Mã loại</label> -->
                                <input type="hidden" class="form-control  m-auto " style="background-color: #2A3038;" id="id" name="id" placeholder="Auto Munber">
                            
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="cinemas_id" class="fw-bold col-form-label text-white">Chọn Rạp</label>
                                    <select class="form-control" id="cinemas_id" name="cinemas_id">
                                        <?php
                                        $cinemas = cinemas();
                                        foreach ($cinemas as $cinemas) {
                                        ?>
                                            <option class='text-white boder' value="<?= $cinemas['id'] ?>"><?= $cinemas['name'] ?></option>
                                        <?php

                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="hall_name" class="fw-bold col-form-label text-white">Tên Phòng</label>
                                <input type="text" class="form-control  m-auto" id="hall_name" name="hall_name" placeholder='Tên Phòng...'>
                                <span class="error text-danger"></span>
                                <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                            </div>
                            <div class="col-sm-12">
                                <label for="movies_id" class="fw-bold col-form-label text-white">Phim</label>
                                
                                <select class="form-control " id="mySelect"   name="movies_id">
                                    <?php

                                    $cinemas = movies_select_all();
                                    foreach ($cinemas as $mv) {
                                    ?>
                                        <option class='text-white boder' value="<?= $mv['id'] ?>"><?= $mv['name_movie'] ?></option>
                                    <?php

                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label for="start_time" class="fw-bold col-form-label text-white">Thời Gian Bắt Đầu</label>
                                <input type="text" class="form-control " id="start_time" name="start_time" placeholder='Thời Gian Bắt Đầu...'>
                                <span class="error text-danger"></span>
                                
                            </div>
                            <div class="col-sm-12">
                            <label class="fw-bold col-form-label text-white">Trạng thái</label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="" name="status" value="Active" >Còn Phòng
                                    <input type="radio" class="ml-md-2" name="status" value="Inactive">Hết Phòng
                                </div>
                                <span class="error text-danger"></span>
                            </div>
                    
                        
                        </div>
                        <br>
                        <div class="border-top">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="insert_rum" value="Thêm mới">
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
    var my_form = document.getElementById("rum_form");
    my_form.addEventListener('submit', function(event) {
        var err =document.getElementsByClassName("error");
        var name =document.getElementById("hall_name").value;
        var status =document.getElementsByName("status");
        var time = document.getElementById('start_time').value;
     var hass_err =false;
     err[0].innerHTML = '';
     err[1].innerHTML = '';
     err[2].innerHTML = '';
     if(name.trim() == ""){
        err[0].innerHTML = "Vui Lòng Không Bỏ Trống";
        hass_err  = true;
     }
     if(!status[0].checked && !status[1].checked ){
        err[2].innerHTML = "Vui Lòng Chọn";
        hass_err  = true;

     }
     if(time.trim() == ''){
        err[1].innerHTML = "Vui Lòng Nhập Thời Gian";
        hass_err  = true;
     }

     if(hass_err == true){
        event.preventDefault();
     }
    });
</script>