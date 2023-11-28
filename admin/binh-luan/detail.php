<style>
    #ten_sp {
        color: yellow;
        font-weight: bold;
    }
</style>

<div class="content">
    <form action="index.php?delete_box" method="post" id="form_delete_loai">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <form action="index.php?movies_id=<?= $movies_id ?>" method='post'>
                            <div class="card-header card-header-primary">
                                <h4 class="card-title text-center">Chi Tiết Bình Luận</h4>
                                <p id='ten_sp' class="card-category ">Sản Phẩm: <?= ($items[0]['ten_hh'])   ?></p>
                            </div>

                            <div class="card-body">
                                <div class="table-rebonsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>

                                            </th>
                                            <th>
                                                Nội Dung
                                            </th>
                                            <th>
                                                Ngày Bình Luận
                                            </th>
                                            <th>
                                                Người Bình Luận
                                            </th>
                                            <th>

                                            </th>

                                        </thead>
                                        <?php
                                        $productId = $_GET['ma_hh'];


                                        foreach ($items as $item) {
                                            extract($item);

                                            // $delete_link = "index.php?ma_loai=" . $ma_loai;
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="check[]" value="<?= $ma_bl ?>" id="<?= $ma_bl ?>" value="<?= $ma_bl ?>" class="check_button">

                                                    </td>
                                                    <td>
                                                        <?= $noi_dung ?>
                                                    </td>
                                                    <td>
                                                        <?= $ngay_bl ?>
                                                    </td>
                                                    <td>
                                                        <?= $ma_kh ?>
                                                    </td>



                                                    <td>
                                                        <a href="index.php?delete=<?php echo $item['ma_bl'] . "&productId=" . $productId ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php

                                        }
                                            ?>
                                            </tbody>
                                    </table>
                                    <div class='mt-4 d-flex justify-content-end'>
                                        <button type="button" onclick="selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Chọn Tất Cả</button>
                                        <button type="button" onclick="remove_selectAll()" ; class="btn btn-outline-warning mx-xl-2 py-2">Bỏ Chọn Tất Cả</button>
                                        <button type="submit" class="btn btn-outline-warning py-2 mx-xl-2" name="delete_all" id="xoa">Xóa Các Mục Con</button>

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </form>
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