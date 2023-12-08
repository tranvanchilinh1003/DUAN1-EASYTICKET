<style>
    #ten_sp {
        color: yellow;
        font-weight: bold;
    }
</style>
<div class="page-header">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/binh-luan/index.php?btn_list">Danh Sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
        </ol>

    </nav>

</div>
<div class="content">
    <form action="index.php?delete_box" method="post" id="form_delete_loai">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <form action="index.php?movies_id=<?= $movies_id ?>" method='post'>
                            <div class="card-header card-header-primary">
                                <h4 class="card-title text-center">Chi Tiết Bình Luận</h4>
                                <p id='ten_sp' class="card-category ">Sản Phẩm: <?= ($items[0]['name_movie']) ?></p>
                            </div>

                            <div class="card-body text-center">
                                <div class="table-rebonsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>

                                            </th>
                                            <th>
                                                Nội Dung
                                            </th>
                                            <th>
                                                Đánh Giá Sao
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
                                        $movies_id = $_GET['id'];


                                        foreach ($items as $item) {
                                            extract($item);
                                            $_SESSION['id'] =    $item['id'];
                                            // $delete_link = "index.php?ma_loai=" . $ma_loai;
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="check[]" value="<?= $id ?>" id="<?= $id ?>" value="<?= $id ?>" class="check_button">

                                                    </td>
                                                    <td>
                                                        <?= $content ?>
                                                    </td>
                                                    <td>
                                                        <!-- <?= $ratings ?> <i class="bi bi-star-fill text-warning"></i> -->
                                                        <!-- ngôi sao quý hiếm  -->
                                                        <div class="rate d-flex  ml-md-5">
                                                            <svg style="display:none;">
                                                                <defs>
                                                                    <symbol id="fivestars-1" class="border-none">
                                                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#191c24" fill-rule="evenodd" />
                                                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#191c24" fill-rule="evenodd" transform="translate(24)" />
                                                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#191c24" fill-rule="evenodd" transform="translate(48)" />
                                                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#191c24" fill-rule="evenodd" transform="translate(72)" />
                                                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#191c24" fill-rule="evenodd" transform="translate(96)" />
                                                                    </symbol>
                                                                </defs>
                                                            </svg>
                                                            <div class="rating-1 ml-md-5">
                                                                <progress class="rating-bg " value="<?= $ratings ?>" max="5"></progress>
                                                                <svg>
                                                                    <use xlink:href="#fivestars-1" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!--end ngôi sao quý hiếm  -->
                                                    </td>
                                                    <td>
                                                        <?= $comment_date ?>
                                                    </td>
                                                    <td>
                                                        <?= $username ?>
                                                    </td>



                                                    <td>
                                                        <a href="index.php?delete=<?= $_SESSION['id'] ?>&movies_id=<?= $movies_id ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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