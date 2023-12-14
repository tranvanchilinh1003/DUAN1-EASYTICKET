<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/style_seat.css">
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <div class="breadcrumb-option">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="breadcrumb__links">
                                        <a href="#" disabled readonly>
                                            <h4 class="text-muted"> Đặt ghế</h4>
                                        </a>
                                        <a href="#">
                                            <h4 class="text-warning">Thanh toán</h4>
                                        </a>
                                        <a href="#" disabled readonly>
                                            <h4 class="text-muted">Thông tin vé</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-5 mb-5">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="card-header-title text-muted">
                            Thông tin cá nhân
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-hover">
                            <thead>
                                <tr>
                                    <th class="">Họ và Tên</th>
                                    <th class="">Giới Tính</th>
                                    <th class="">Thông Tin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=""><?= $user['full_name'] ?></td>
                                    <td class=""><?php echo ($user['gender']) == 0 ? "Nam" : "Nữ" ?></td>
                                    <td class=""><?= $user['information'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5 mb-5">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <p class="text-truncate mb-0">
                                    Phim:
                                    <strong><?= $item[0]['name_movie'] ?></strong>
                                </p>
                                <p class="text-truncate mb-0"><strong> Rạp EasyTicket Cần Thơ</strong></p>

                                <p class="text-truncate mb-0">
                                    Ngày chiếu: <strong><?= $item[0]['date_show'] ?></strong> <br>

                                    Suất:
                                    <strong>
                                        <?= $item[0]['gio_bd'] ?>:<?= $item[0]['phut_bd'] ?> - <?= $item[0]['gio_kt'] ?>:<?= $item[0]['phut_kt'] ?>
                                    </strong>
                                </p>
                                <p class="text-truncate mb-0">
                                    Phòng chiếu: <strong><?= $item[0]['hall_name'] ?></strong>
                                    -
                                    Ghế
                                    <span> <strong><?= $selectedSeats ?></strong> </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card d-none d-md-block mt-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Tổng đơn vé
                                </h6> <span class="h2 mb-0">
                                    <p id='price-display' class="" name='price'><?= number_format($totalPrice, 0) ?>đ</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flow-actions sticky-footer-bars">
                    <div class="row mt-2">
                        <div class="col-3"><a href="<?= $SITE_URL . '/phim/dat-ve.php?dat-ghe&id=' . $id  ?>" class="btn btn-lg btn-outline-light btn-block ">
                                ←
                            </a></div>
                        <div class="col-9"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-lg btn-danger btn-block"><span class="d-md-none">0&nbsp;đ |</span>
                                Thanh Toán
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mb-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-header-title">
                                    Xác nhận thanh toán
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list mb-3">
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3">Rạp </div>
                                    <div class="col"><strong> EasyTicket Cần Thơ</strong></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3">Phim</div>
                                    <div class="col"><strong>
                                            <strong><?= $item[0]['name_movie'] ?></strong>
                                        </strong></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3">Suất</div>
                                    <div class="col"><strong>
                                            <?= $item[0]['gio_bd'] ?>:<?= $item[0]['phut_bd'] ?> - <?= $item[0]['gio_kt'] ?>:<?= $item[0]['phut_kt'] ?>
                                        </strong></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3">Phòng</div>
                                    <div class="col"><strong>
                                            <strong><?= $item[0]['hall_name'] ?></strong>
                                        </strong></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3">Ghế</div>
                                    <div class="col"><strong><?= $selectedSeats ?></strong></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3">Ngày Chiếu</div>
                                    <div class="col"><strong><?= $item[0]['date_show'] ?></strong></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3">Thông tin<br>cá nhân</div>
                                    <div class="col">
                                        <strong>
                                            <?= $user['full_name'] ?>
                                            <br><?= $user['information'] ?>
                                        </strong>
                                    </div>
                                </div>
                            </li>
                        </ul> <a href="<?= $SITE_URL . '/phim/dat-ve.php?thong-tin&id=' . $id  ?>" class="btn btn-danger btn-block thong-tin" ><!----> <span>Tiến hành thanh toán</span> <!----></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const seatPrices = {
            'seat-area-1': 45000,
            'seat-area-2': 80000,
        };

        const seats = document.querySelectorAll('.seat-row li');
        const selectedSeats = []; // Danh sách ghế đã chọn

        seats.forEach(function(seat) {
            seat.addEventListener('click', function() {
                // Lấy loại ghế từ class
                const seatType = seat.classList[1];

                // Kiểm tra xem ghế đã được chọn chưa
                if (!seat.classList.contains('selected')) {
                    seat.classList.add('selected');
                    selectedSeats.push({
                        type: seatType,
                        seatElement: seat
                    }); // Thêm ghế vào danh sách đã chọn
                } else {
                    seat.classList.remove('selected');
                    // Loại bỏ ghế khỏi danh sách đã chọn
                    const index = selectedSeats.findIndex((selectedSeat) => selectedSeat.seatElement === seat);
                    if (index !== -1) {
                        selectedSeats.splice(index, 1);
                    }
                }
                // Tính tổng giá tiền
                const totalPrice = selectedSeats.reduce((total, selectedSeat) => {
                    return total + seatPrices[selectedSeat.type];
                }, 0);

                const priceDisplay = document.getElementById('price-display');
                priceDisplay.textContent = ` ${totalPrice}k`;
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>