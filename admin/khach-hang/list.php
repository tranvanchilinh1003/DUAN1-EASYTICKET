<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-warning">Danh Sách Tài Khoản</h3>
            <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
            <!-- </p> -->
            <form action="#" method="post" id="form_delete_loai">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>     <input type="checkbox" onclick="selectAll(); " ondblclick="remove_selectAll()" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button"></th>
                                <th>ID</th>
                                <th> Ảnh </th>
                                <th> Tài Khoản </th>
                                <th> Họ Tên </th>
                                <th> Gmail </th>
                                <th> Vai Trò </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button">

                                </td>
                                <td></td>
                                <td class="py-1">
                                    <img src="<?= $ADMIN_URL ?>/assets/images/faces-clipart/pic-1.png" alt="image" />
                                </td>
                                <td> Herman Beck </td>
                                <td>
                                /
                                </td>
                                <td> $ 77.99 </td>
                                <td> May 15, 2015 </td>
                                <td>

                                    <a href="index.php?btn_edit" class="btn btn-success " name='btn_edit'><i class="bi bi-pencil-square"></i></a>

                                    <a href="index.php?btn_delete&ma_kh=<?= $ma_kh ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class='mt-4 d-flex justify-content-end'>
                    <button type="button" onclick="selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Chọn Tất Cả</button>
                    <button type="button" onclick="remove_selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Bỏ Chọn Tất Cả</button>
                    <button type="submit" class="btn btn-outline-warning py-2 mx-xl-2" name="delete_all" id="xoa">Xóa Các Mục Con</button>
                    <a href="index.php" class='btn btn-outline-warning py-2 mx-xl-2'>Nhập Thêm</a>
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