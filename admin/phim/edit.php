<div class="page-header">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/phim/index.php?btn_list">Danh Sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>

    </nav>

</div>
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
                            <input type="hidden" class="form-control" style="background-color: #2A3038;" id="id" name="id" value="<?=$item['id'] ?>">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="categories_id" class="fw-bold col-form-label text-white">Thể loại</label>
                                    <select class="form-control" id="categories_id" name="categories_id">

                                        <?php
                                        $move = categories_select_all();
                                        foreach ($move as $categories) {
                                            if ($categories['id'] == $item['categories_id']) {
                                                echo '<option class="text-white" selected value="' . $categories['id'] . '">' . $categories['type_name'] . '</option>';
                                            } else {
                                                echo '<option class="text-white" value="' . $categories['id'] . '">' . $categories['type_name'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="name_movie" class="fw-bold col-form-label text-white">Tên phim</label>
                                <input type="text" class="form-control" id="name_movie" name="name_movie" value="<?= $item['name_movie'] ?>">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="trailer" class="fw-bold col-form-label text-white">Trailer</label>
                                <input type="text" class="form-control" id="trailer" name="trailer" value="<?= $item['trailer'] ?>">
                                <span class="error text-danger"></span>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class="col-sm-4">
                                <label for="time" class="fw-bold col-form-label text-white">Thời lượng</label>
                                <input type="text" class="form-control" id="time" name="time" value="<?= $item['time'] ?>">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label for="image" class="fw-bold col-form-label text-white">Hình ảnh</label>
                                <input type="file" class="form-control" id="image" name="image" value="<?= $item['image'] ?>">
                                <input type="hidden" class="form-control" id="image_old" name="image_old" value="<?= $item['image'] ?>">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <label class="fw-bold col-form-label text-white">Trạng thái</label>
                                <div class=' p-2 rounded-right rounded-left' style="background-color: #2A3038;">
                                    <input type="radio" class="" name="status" value="0" <?php echo $item['status'] == 0 ? "checked" : ""; ?>>Ẩn
                                    <input type="radio" class="ml-md-2" name="status" value="1" <?php echo $item['status'] == 1 ? "checked" : ""; ?>>Hiện
                                </div>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class="col-sm-4">
                                <label for="date_movie" class="fw-bold col-form-label text-white">Ngày</label>
                                <input type="date" class="form-control" id="date_movie" name="date_movie" value="<?= $item['date_movie'] ?>">
                                <span class="error text-danger"></span>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="actor" class="fw-bold col-form-label text-white">Diễn Viên</label>
                                    <select class="form-control" id="actor" name="actor_id">


                                        <?php
                                        $actor = actor_select_all();
                                        foreach ($actor as $actor) {
                                            if ($actor['id'] == $item['actor_id']) {
                                                echo '<option class="text-white" selected value="' . $actor['id'] . '">' . $actor['actor'] . '</option>';
                                            } else {
                                                echo '<option class="text-white" value="' . $actor['id'] . '">' . $actor['actor'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-sm-12'>
                                <div class="form-group">
                                    <label for="discretion">Mô tả</label>
                                    <textarea class="form-control" id="discretion" name="discretion" rows="4"><?= $item['discretion'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="border-top">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="btn_update" value="Cập Nhật">
                                <a href="index.php?btn_list" class="btn btn-outline-danger p-3 mx-xl-3" name="list">Danh sách</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var form_insert = document.getElementById("isert_form");
    form_insert.addEventListener('submit', function(e) {
        var name_movie = document.getElementById('name_movie').value;
        var categories = document.getElementById("trailer").value;
        var time = document.getElementById("time").value;
        var image = document.getElementById('image');
        var selectedDate = new Date(document.getElementById("date_movie").value);
        var currenDate = new Date();
        var error = document.getElementsByClassName("error");
        var has_error = true;
        error[0].innerHTML = '';
        error[1].innerHTML = '';
        error[2].innerHTML = '';
        error[3].innerHTML = '';
        error[4].innerHTML = '';
        if (name_movie.trim() == " " || name_movie.length < 5) {
            error[0].innerHTML = "không để trống hoặc dưới 5 ký tự";
            has_error = false;
        }
        if (categories.trim() === '' || categories.length < 5) {
            error[1].innerHTML = 'không để trống hoặc dưới 5 ký tự';
            has_error = false;
        }
        if (time.trim() == "") {
            error[2].innerHTML = "không để trống";
            has_error = false;
        }

        if (selectedDate > currenDate) {
            error[4].innerHTML = 'Ngày Nhập Lớn Hơn hiện tại';
            has_error = false;
        }
        if (has_error == false) {
            e.preventDefault();
        }
    });
</script>