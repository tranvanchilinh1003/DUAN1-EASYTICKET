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
                        <table class="table card-table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Họ và Tên</th>
                                    <th class="">Giới Tính</th>
                                    <th class="">Thông Tin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $user['full_name'] ?></td>
                                    <td class=""><?php echo ($user['gender']) == 0 ? "Nam" : "Nữ" ?></td>
                                    <td class=""><?= $user['information'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="card mt-3">
                    <div class="card-header bg-light">
                        <div class="card-header-title text-muted">
                            Thanh Toán Bằng
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class='m-2'>
                            <input type="radio" name="checked " checked class="payment-method" id="momoRadio" data-info="momo.php">
                            <label for="momoRadio">
                                <img src="../../img/momo-icon.png" width="35px" alt="momo"> Ví Momo
                            </label>
                        </div>
                        <div class='m-2 '>
                            <input type="radio" name="checked " class="payment-method" id="money_face" data-info="tien">
                            <label for="money_face">
                                <img src="../../img/icon-mat.png" width="35px" alt="momo"> Thanh Toán Tiền Mặt
                            </label>
                        </div>

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
                        <form class="col-9" method="POST" id="paymentForm" target="_blank" enctype="application/x-www-form-urlencoded">
                            <input type="hidden" name="cinema_halls_id" id="cinema_halls_id" value="<?= $_SESSION['cinema_halls_id'] ?>">
                            <input type="hidden" name="seat_number" id="seat_number" value="<?= $selectedSeats ?>">
                            <input type="hidden" name="total" id="total" value="<?= $totalPrice ?>">
                            <input type="hidden" name="users_id" id="users_id" value="<?= $user['id'] ?>">
                            <button class="btn btn-lg btn-danger btn-block" name='redirect' id='bt' onclick="processPayment();">Thanh Toán</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
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

    function processPayment() {
        const selectedPaymentMethod = document.querySelector('.payment-method:checked');

        if (selectedPaymentMethod) {
            const paymentInfo = selectedPaymentMethod.dataset.info;

            // Lấy đối tượng form
            const form = document.getElementById('paymentForm');

            // Đặt giá trị paymentInfo vào action của form
            form.action = '<?= $SITE_URL ?>/phim/' + paymentInfo;

            // Gửi form
            form.submit();
        } else {
            alert('Vui lòng chọn phương thức thanh toán trước khi thanh toán!');
        }
    }
</script>