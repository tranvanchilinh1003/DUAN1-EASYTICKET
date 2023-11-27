<div class="page-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/loai-phim/index.php">Thêm Loại </a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
        </ol>
    </nav>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-warning">Danh Sách Thể Loại</h3>
            <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
            <!-- </p> -->
            <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
            <form action="#" method="post" id="form_delete_loai">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> <input type="checkbox" onclick="selectAll(); " ondblclick="remove_selectAll()" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button"></th>
                                <th>ID</th>
                                <th>Thể loại</th>
                                <th>Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <?php
                        $items = categories_select_all();
                        foreach ($items as $categories) {
                            extract($categories);
                            $id = $categories['id'];
                            $type_name = $categories['type_name'];
                        ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button">
                                    </td>
                                    <td><?= $id ?></td>
                                    <td><?= $type_name ?> </td>
                                    <td>
                                        <a href="index.php?btn_edit&id=<?= $id ?>" class="btn btn-success " name='btn_edit'><i class="bi bi-pencil-square"> Chi tiết</i></a>

                                        <a href="index.php?btn_delete&id=<?= $id ?>" class="btn btn-danger"><i class="bi bi-trash"> Xóa</i></a>
                                    </td>

                                </tr>
                            <?php } ?>
                            </tbody>
                    </table>
                </div>
                <div class='mt-4 d-flex justify-content-end'>
                    <button type="button" onclick="selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Chọn Tất Cả</button>
                    <button type="button" onclick="remove_selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Bỏ Chọn Tất Cả</button>
                    <button type="submit" class="btn btn-outline-warning py-2 mx-xl-2" name="delete_all" id="xoa">Xóa Các Mục Con</button>
                    <!-- <a href="index.php" class='btn btn-outline-warning py-2 mx-xl-2'>Nhập Thêm</a> -->
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