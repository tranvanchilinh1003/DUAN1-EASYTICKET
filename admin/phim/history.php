<div class="page-header">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/phim/index.php?btn_list">Danh Sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lịch Sử Xóa</li>
        </ol>

    </nav>

</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-warning">Danh Sách Thể Phim</h3>
            <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
            <!-- </p> -->
            <form action="#" method="post" id="form_delete_loai">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> <input type="checkbox" onclick="selectAll(); " ondblclick="remove_selectAll()" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button"></th>
                                <th>ID</th>
                                <th>Hình</th>
                                <th>Tên phim</th>
                                <th>Ngày</th>
                                <th>Thời Gian</th>
                                <th>Trạng thái</th>
                                <th>Chỉnh Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $items = movies_select_history();
                            foreach ($items as $item) {
                                $id =    $item['id'];
                            ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check[]" value="<?= $item['id'] ?>" id="<?= $item['id'] ?>" class="check_button">
                                    </td>
                                    <td name='id' id='id'><?= $item['id'] ?></td>
                                    <td>
                                        <img src="../../img/<?= $item['image'] ?>" alt="image" />
                                    </td>
                                    <td> <?= $item['name_movie'] ?> </td>
                                    <td> <?= $item['date_movie'] ?> </td>
                                    <td> <?= $item['time'] ?> </td>
                                    <td> <?= $item['status'] == 1 ? "Hiện" : "Ẩn"; ?> </td>

                                    <td>
                                        <a href="index.php?reset_movie&id=<?= $id ?>" class="btn btn-success " name='reset_movie'><i class="bi bi-cloud-download"></i>Khôi Phục</a>
                                        <a href="#" onclick="confirmDelete();"  class="btn btn-danger "><i class="bi bi-trash"></i>Xóa Vĩnh Viễn</a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    function confirmDelete() {
        var username = $('#id').val();

        Swal.fire({
        
            text: 'Bạn chắc chắn muốn xóa Phim này?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Xóa',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                // Người dùng đã nhấn Xóa, gọi hàm để thực hiện xóa tài khoản
                deleteAccount(username);
                window.location.href = 'index.php?history_movie';
            }
        });
    }

    function deleteAccount(username) {
        $.ajax({
            type: 'POST',
            url: 'index.php?delete_vv&id=<?=$item['id']  ?>', // Đường dẫn tới tập tin PHP xử lý xóa tài khoản
            data: { username: username },
            
            
        });
    }
</script>