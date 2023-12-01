
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title p-2 text-center">Tổng Hợp Bình Luận</h4>
                        <p class="card-category"> </p>
                    </div>

                    <div class="card-body text-center">
                        <div class="table-responsive ">
                            <table class="table ">
                                <thead class=" text-primary">
                                    <th>
                                        Phim
                                    </th>
                                    <th>
                                        Số Bình Luận
                                    </th>
                                    <th>
                                        Mới Nhất
                                    </th>
                                    <th>
                                        Củ Nhất
                                    </th>

                                    <th>

                                    </th>
                                </thead>
                                <?php

                                foreach ($items as $item) {
                                    extract($item);


                                ?>
                                <tbody>
                                    <tr>

                                    <td>
                                                <?=$name_movie ?>
                                            </td>
                                            <td>
                                                <?= $so_luong ?>
                                            </td>
                                            <td>
                                            <?= $cu_nhat ?>
                                        </td>
                                        <td>
                                            <?= $moi_nhat ?>
                                        </td>


                                        <td>
                                            <a href="../binh-luan/index.php?id=<?= $id ?>"" class='btn btn-outline-google btn-sm '>Xem Chi Tiết</a>
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
            <div>

            </div>
        </div>
    </div>
</div>