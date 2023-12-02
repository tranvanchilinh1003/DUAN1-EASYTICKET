<div class="page-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/loai-phim/index.php?btn_list">Danh sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="container-fluid">
        <!-- <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i> -->
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quản lý loại</h3>
            </div>

            <div class="card-body">
                <div class="table">
                    <form class="form" action="<?= $ADMIN_URL ?>/loai-phim/index.php?btn_insert" method="post" id="isert_form" enctype="multipart/form-data">
                        <div class=''>
                            <div class="col-sm-12">
                                <!-- <label for="id" class="fw-bold col-form-label text-white">Mã loại</label> -->
                                <input type="hidden" class="form-control  m-auto " style="background-color: #2A3038;" id="id" name="id" placeholder="Auto Munber">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-12">
                                <label for="type_name" class="fw-bold col-form-label text-white">Tên loại</label>
                                <input type="text" class="form-control  m-auto" id="type_name" name="type_name" placeholder='Tên loại...'>
                                <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
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