
<div class="container">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Thêm Ghế</h3>
            </div>

            <div class="card-body">
                <div class="table">
                    <form class="form" action="index.php" method="post" id="isert_form" enctype="multipart/form-data">
                        <div class=''>
                            <div class="col-sm-12">
                                <!-- <label for="id" class="fw-bold col-form-label text-white">Mã loại</label> -->
                                <input type="hidden" class="form-control  m-auto " style="background-color: #2A3038;" id="id" name="id" placeholder="Auto Munber">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-12">
                                <label for="cinema_halls_id" class="fw-bold col-form-label text-white">Chọn Phòng</label>
                                
                                <select class="form-control " id="cinema_halls_id"   name="cinema_halls_id">
                                    <?php

                                    $rum = rum_all();
                                    foreach ($rum as $mv) {
                                    ?>
                                        <option class='text-white boder' value="<?= $mv['id'] ?>"><?= $mv['hall_name'] ?></option>
                                    <?php

                                    }
                                    ?>
                                </select>
                                <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                            </div>
                        </div>
                        <br>
                        <div class="border-top">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="insert_seat" value="Thêm Ghế">
                                <button type="reset" class="btn btn-outline-pinterest p-3 mx-xl-3" name="clear_form">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>