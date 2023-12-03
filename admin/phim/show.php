<div class="container">
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Thêm Xuất Chiếu</h3>
            </div>
            <div class="card-body">
                <div class="table">
                    <form class="form" action="./index.php?insert_show" method="post" id="insert_show" enctype="multipart/form-data">
                        <div class='row mt-2'>
                            <!-- <div class="col-sm-4"> -->
                            <!-- <label for="id" class="fw-bold col-form-label text-white">Id</label> -->
                            <input type="hidden" class="form-control" style="background-color: #2A3038;" id="id" name="id" placeholder="Auto Number...">
                            
                            <!-- </div> -->
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
                                <label for="start_time" class="fw-bold col-form-label text-white">Thời Gian Bắt Đầu</label>
                                <input type="number" class="form-control " id="start_time" name="start_time" placeholder='Thời Gian Bắt Đầu...'>
                                <span class="error text-danger"></span>
                                <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                            </div>
                            <div class="col-sm-4">
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
                        </div>
                        <div class='row mt-3'>
                        </div>
                        <br>
                        <div class="border-top">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="inser_showtime" value="Thêm mới">
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
    var form =document.getElementById("insert_show");
    form.addEventListener("click",function(event){
var start =document.getElementById("start_time").value;
hass_err = true;
var err =document.querySelector(".error")
if(start.trim() == "" ){
    err.innerHTML = "Không Được Để Trống";
    hass_err =false;

}else{
    err.innerHTML = "";
}
if(hass_err == false){
event.preventDefault();
}

    });
</script>