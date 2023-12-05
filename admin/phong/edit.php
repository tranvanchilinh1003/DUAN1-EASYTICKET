<div class="page-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/phong/index.php?btn_list">Danh Sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="container-fluid">
    
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
                                <input type="hidden" class="form-control  m-auto " style="background-color: #2A3038;" id="id" name="id" value="<?=$item['id'] ?>">
                            
                            </div>
                            <div class="col-sm-12">
                                <label for="hall_name" class="fw-bold col-form-label text-white">Tên Phòng</label>
                                <input type="text" class="form-control  m-auto" id="hall_name" name="hall_name" value="<?=$item['hall_name']?>">
                                <input type="hidden" class="form-control  m-auto" id="ten_old" name="ten_old" value="<?=$item['hall_name']?>">
                                <span class="error text-danger"></span>
                                <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                            </div>
                            <div class="col-sm-12">
                                <label for="movies_id" class="fw-bold col-form-label text-white">Phim</label>
                                
                                <select class="form-control " id="mySelect"   name="movies_id" >
                                <?php
                                    $cinemas = movies_select_all();
                                        foreach ($cinemas as $cinemas) {
                                            if ($cinemas['id'] == $item['movies_id']) {
                                                echo '<option class="text-white" selected value="' . $cinemas['id'] . '">' . $cinemas['name_movie'] . '</option>';
                                            } else {
                                                echo '<option class="text-white" value="' . $cinemas['id'] . '">' . $cinemas['name_movie'] . '</option>';
                                            }
                                        }
                                        ?>
                                    
                                </select>
                            </div>
                            <div class="col-sm-12">
                            <label class="fw-bold col-form-label text-white">Trạng thái</label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="" name="status" value="Active" <?php echo ($item['status']=='Active')? "checked" : ''; ?> >Còn Phòng
                                    <input type="radio" class="ml-md-2" name="status" value="Inactive"<?php echo ($item['status']=='Inactive')? "checked" : ''; ?> >Hết Phòng
                                </div>
                                <span class="error text-danger"></span>
                            </div>
                        
                        </div>
                        <br>
                        <div class="border-top">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="update_rum" value="Cập Nhật">
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
     var hass_err =false;
     err[0].innerHTML = '';
     err[1].innerHTML = '';
     if(name.trim() == ""){
        err[0].innerHTML = "Vui Lòng Không Bỏ Trống";
        hass_err  = true;
     }
     if(!status[0].checked && !status[1].checked ){
        err[1].innerHTML = "Vui Lòng Chọn";
        hass_err  = true;

     }

     if(hass_err == true){
        event.preventDefault();
     }
    });
</script>