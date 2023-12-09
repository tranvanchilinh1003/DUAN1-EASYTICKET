<div class="page-header">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/phong/">Nhập Thêm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
        </ol>

    </nav>
    <a href="<?= $ADMIN_URL ?>/phong/index.php?history_movie" class='text-danger m-sm-2'>Danh Sách Hết Phòng</a>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-warning">Danh Sách Phòng Trống</h3>
            <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
            <!-- </p> -->
            <form action="#" method="post" id="form_delete_loai">
                <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> <input type="checkbox" onclick="selectAll(); " ondblclick="remove_selectAll()" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button"></th>
                                <th>ID</th>
                                <th>Rạp</th>
                                <th>Tên Phòng</th>
                                <th>Phim Chiếu</th>
                                <th>Thời Gian Bắt Đầu</th>
                                <th>Chỉnh Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $items = rum_all();
                            foreach ($items as $item) {
                            ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button">
                                </td>
                                <td><?=$item['id'] ?></td>
                                <td><?=$item['name'] ?></td>
                                <td><?=$item['hall_name'] ?></td>
                                <td> <?=$item['name_movie'] ?> </td>
                                <td> <?=$item['start_time'] ?> </td>                            
                                <!-- <td> <?=($item['status'] == 'Active')? "Phòng Trống" : "Phòng Đầy"; ?> </td>                                 -->
                                <td >
                                    <a href="index.php?btn_edit&id=<?=$item['id']?>" class="btn btn-success " name='btn_edit'><i class="bi bi-pencil-square">Chi Tiết</i></a>
                                    <a href="index.php?delete_rum_status&id=<?= $item['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i>Xóa</a>
                                </td>
                            </tr>
                            <?php

                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class='mt-4 d-flex justify-content-end'>
                    <button type="button" onclick="selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Chọn Tất Cả</button>
                    <button type="button" onclick="remove_selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Bỏ Chọn Tất Cả</button>
                    <button type="submit" class="btn btn-outline-warning py-2 mx-xl-2" name="delete_all" id="xoa">Xóa Các Mục Con</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function selectAll() {
        var checkboxes = document.getElementsByClassName('check_button');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type === 'checkbox') {
                checkboxes[i].checked = true;
            }
        }

    }

    function remove_selectAll() {
        var checkboxes = document.getElementsByClassName('check_button');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type === 'checkbox') {
                checkboxes[i].checked = false;
            }
        }
    }
</script>