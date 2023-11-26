<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title p-2 text-center">Thống Kê Phim Từng Loại</h4>
                        <p class="card-category"> </p>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class=" table table-bordered ">
                                <thead class=" text-primary">
                                    <th>
                                        Loại Hàng
                                    </th>
                                    <th>
                                        Số Lượng
                                    </th>
                                    <th>
                                        Giá Cao Nhất
                                    </th>
                                    <th>
                                        Giá Thấp Nhất
                                    </th>
                                    <th>
                                        Giá Trung Bình
                                    </th>



                                </thead>
                                <?php

                                foreach ($items as $item) {
                                    extract($item);


                                    // $delete_link = "index.php?ma_loai=" . $ma_loai;
                                ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $type_name ?>
                                            </td>
                                            <td>
                                                <?= $so_luong ?>
                                            </td>
                                            <td>
                                                <?= number_format($gia_min, 2) ?> <sup>đ</sup>
                                            </td>
                                            <td>
                                                <?= number_format($gia_max, 2) ?> <sup>đ</sup>
                                            </td>
                                            <td>
                                                <?= number_format($gia_avg, 2) ?> <sup>đ</sup>

                                            </td>






                                        </tr>
                                    <?php

                                }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        <a href="index.php?chart" class='btn btn-outline-google mt-5 p-3'>Biểu Đồ</a>
    </div>

</div>