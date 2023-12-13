<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/style_seat.css">
<!-- <style>
  .seats {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .row {
    display: flex;
    gap: 10px;
  }

  .seat {
    width: 40px;
    height: 40px;
    background-color: #ccc;
    cursor: pointer;
  }

  .seat.selected {
    background-color: #4CAF50;
  }

  .total {
    margin-top: 20px;
  }

  .checkout-button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }

  .checkout-button:hover {
    background-color: #45a049;
  }

  .checkout-button:active {
    background-color: #3e8e41;
  }
</style> -->

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
                                        <a href="#">
                                            <h4 class="text-warning"> Đặt ghế</h4>
                                        </a>
                                        <a href="#" disabled readonly>
                                            <h4 class="text-muted">Thanh toán</h4>
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
            <div class="col-md-8">
                <input type="text" readonly disabled class="form-control  text-center  mt-5" style="background-color: #f8f9fa;" name="" id="" placeholder="Màn Hình Chiếu">
                <div data-v-220afe6d="" class="alert-heading col-12 col-lg-8 d-md-inline ">
                    <div data-v-220afe6d="">
                        <div data-v-220afe6d="" id="ticketing-step-0">
                            <div data-v-220afe6d="" class="ticketing-content">
                                <div data-v-220afe6d="" class="seat-selection ">
                                    <div data-v-220afe6d="" class="legend">
                                        <div data-v-220afe6d=""><span data-v-220afe6d="" class="selected"></span>
                                            <p data-v-220afe6d="" class="text-light">Ghế bạn chọn</p>
                                        </div>
                                        <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-1 taken"></span>
                                            <p data-v-220afe6d="" class="text-light">Đã chọn</p>
                                        </div>
                                    </div>

                                    <!-- <input type="text" class="form-control w-75 m-auto text-center mb-lg-5" placeholder="Màn Hình" disabled> -->
                                    <div data-v-220afe6d="" class="seats-wrapper-parent">
                                        <div data-v-220afe6d="" class="seats-wrapper ">
                                            <div data-v-220afe6d="" class="seats-wrapper-row ">
                                                <div data-v-220afe6d="" class="seats seats-row">
                                                    <div data-v-220afe6d="" class="row-wrapper  " readonly disabled>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>A</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>B</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>C</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>D</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>E</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>F</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>G</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>H</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>I</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>J</li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white list-unstyled border text-center py-0 px-0 bg-gray-dark text-white rounded m-2 px-3 m-1 px-3 w-25 d-flex justify-content-center" style="background-color: #dfdfdf;">
                                                            <li data-v-220afe6d="" class="rowname wide text-dark" readonly disabled>K</li>
                                                        </ul>
                                                        <!-- <ul data-v-220afe6d="" class="seat-row">
                                            <li data-v-220afe6d="" class="rowname wide">L</li>
                                        </ul> -->
                                                    </div>
                                                </div>
                                                <div data-v-220afe6d="" class="seats seats-map">
                                                    <div data-v-220afe6d="" class="row-wrapper">
                                                        <ul data-v-220afe6d="" class="seat-row seat ">
                                                            <?php
                                                            $itemA = seat_a($id);
                                                            foreach ($itemA as $A) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $A['seat_number']; ?>" value="<?= $A['stiff_price'] ?>" class="available seat-area-1 seat-size-1 seat-odd">
                                                                    <?= $A['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemB = seat_b($id);
                                                            foreach ($itemB as $B) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $B['seat_number']; ?>" value="<?= $B['stiff_price'] ?>" class="available seat-area-1 seat-size-1 seat-odd">
                                                                    <?= $B['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>

                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemC = seat_c($id);
                                                            foreach ($itemC as $C) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $C['seat_number']; ?>" value="<?= $C['stiff_price'] ?>" class="available seat-area-1 seat-size-1 seat-odd">
                                                                    <?= $C['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>

                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemD = seat_d($id);
                                                            foreach ($itemD as $D) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $D['seat_number']; ?>" value="<?= $D['stiff_price'] ?>" class="available seat-area-2 seat-size-1 seat-odd">
                                                                    <?= $D['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemE = seat_e($id);
                                                            foreach ($itemE as $E) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $E['seat_number']; ?>" value="<?= $E['stiff_price'] ?>" class="available seat-area-2 seat-size-1 seat-odd">
                                                                    <?= $E['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemF = seat_f($id);
                                                            foreach ($itemF as $F) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $F['seat_number']; ?>" value="<?= $F['stiff_price'] ?>" class="available seat-area-2 seat-size-1 seat-odd">
                                                                    <?= $F['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemG = seat_g($id);
                                                            foreach ($itemG as $G) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $G['seat_number']; ?>" value="<?= $G['stiff_price'] ?>" class="available seat-area-2 seat-size-1 seat-odd">
                                                                    <?= $G['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemH = seat_h($id);
                                                            foreach ($itemH as $H) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $H['seat_number']; ?>" value="<?= $H['stiff_price'] ?>" class="available seat-area-2 seat-size-1 seat-odd">
                                                                    <?= $H['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemI = seat_i($id);
                                                            foreach ($itemI as $I) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $I['seat_number']; ?>" value="<?= $I['stiff_price'] ?>" class="available seat-area-2 seat-size-1 seat-odd">
                                                                    <?= $I['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemJ = seat_j($id);
                                                            foreach ($itemJ as $J) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $J['seat_number']; ?>" value="<?= $J['stiff_price'] ?>" class="available seat-area-1 seat-size-1 seat-odd">
                                                                    <?= $J['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                        </ul>
                                                        <ul data-v-220afe6d="" class="seat-row seat">
                                                            <?php
                                                            $itemK = seat_k($id);
                                                            foreach ($itemK as $K) {
                                                            ?>
                                                                <li data-v-220afe6d="" name="seat_number" data-seat-number="<?= $K['seat_number']; ?>" value="<?= $K['stiff_price'] ?>" class="available seat-area-1 seat-size-1 seat-odd">
                                                                    <?= $K['seat_number']; ?>

                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                            <li data-v-220afe6d="" class="spacer readonly disabled"></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-220afe6d="" class="legend mt-4">
                                        <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-1"></span>
                                            <p data-v-220afe6d="" class="text-light">Ghế thường 45.000đ</p>
                                        </div>
                                        <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-2"></span>
                                            <p data-v-220afe6d="" class="text-warning">Ghế VIP 80.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!----> <!---->

                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5 ">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="text-truncate mb-0">
                                    Phim:
                                    <strong> <?= $item[0]['name_movie'] ?></strong>
                                </p>
                                <p class="text-truncate mb-0"> Rạp: <strong><?= $item[0]['name'] ?></strong></p>
                                <p class="text-truncate mb-0">
                                    Ngày Chiếu:
                                    <strong>
                                        <?= $item[0]['date_show'] ?>
                                    </strong>

                                </p>
                                <p class="text-truncate mb-0">
                                    Suất
                                    <strong>
                                        <?= $item[0]['gio_bd'] ?>:<?= $item[0]['phut_bd'] ?> - <?= $item[0]['gio_kt'] ?>:<?= $item[0]['phut_kt'] ?>
                                    </strong>


                                </p>

                                <p class="text-truncate mb-0">
                                    Phòng chiếu: <strong><?= $item[0]['hall_name'] ?></strong>
                                    -
                                    Ghế

                                    <span id="selectedSeatInfo">

                                    </span>
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
                                    Tổng Hóa Đơn
                                </h6> <span class="h2 mb-0">
                                    <p id='price-display' class="" data-date='' name='price' value="">0&nbsp;VND</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flow-actions sticky-footer-bars">
                    <div class="row mt-2">
                        <?php

                        date_default_timezone_set('Asia/Ho_Chi_Minh');

                        // Lấy ngày tháng năm hiện tại
                        $currentDateTime = date('Y-m-d');
                        ?>
                        <div class="col-3"><a href="<?= $SITE_URL ?>/phim/dat-ve.php?selected_date&id=<?= $item[0]['movies_id'] ?>&selected_date=<?= $currentDateTime ?>" class="btn btn-lg btn-outline-light btn-block ">
                                ←
                            </a></div>
                        <form method="POST" class="col-9" action="<?=$SITE_URL?>/phim/dat-ve.php?thanh-toan" id="bookingForm">
                            <!-- Các trường khác của biểu mẫu -->
                            
                            <input type="hidden" name="selectedSeats" id="selectedSeatsInput" value="">
                            <input type="hidden" name="totalPrice" id="totalPriceInput" value="">
                            <!-- Nút submit để gửi biểu mẫu -->
                            <button class="btn btn-lg btn-danger btn-block" type="submit">Tiếp Tục</button>
                        </form>
                        <!-- <div class="col-9"><a href="<?= $SITE_URL ?>/phim/dat-ve.php?thanh-toan&id=<?= $item[0]['id'] ?>" class="btn btn-lg btn-danger btn-block"><span class="d-md-none">0&nbsp;đ |</span>
                                Tiếp tục
                            </a></div> -->
                    </div>
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
        const seats = document.querySelectorAll('.seat-row .seat-odd');
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

                // Định dạng giá tiền và hiển thị trong HTML
                const formattedPrice = new Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                }).format(totalPrice);

                const priceDisplay = document.getElementById('price-display');
                priceDisplay.textContent = formattedPrice;
                document.getElementById('totalPriceInput').value = totalPrice;
            });
        });
    });


    // Lấy các phần tử ghế
    const seats = document.querySelectorAll('.seat');
    const selectedSeatInfo = document.getElementById('selectedSeatInfo');

    // Thêm sự kiện click cho mỗi ghế
    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            // Chuyển đổi trạng thái chọn của ghế
            seat.classList.toggle('selected');

            // Hiển thị thông tin ghế đã chọn
            const selectedSeats = document.querySelectorAll('.selected');
            const selectedSeatsArray = Array.from(selectedSeats).map(seat => seat.dataset.seatNumber);
            
            selectedSeatInfo.textContent = ` ${selectedSeatsArray.join('  ')}`;
            
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
    // ... (Phần mã JavaScript hiện tại của bạn)

    // Lấy các phần tử ghế
    const seats = document.querySelectorAll('.seat');
    const selectedSeatInfo = document.getElementById('selectedSeatInfo');

    // ... (Phần mã JavaScript hiện tại của bạn)

    // Thêm sự kiện cho nút đặt vé
    const bookingForm = document.getElementById('bookingForm');
    bookingForm.addEventListener('submit', function(event) {
        // Cập nhật giá trị của các trường ẩn trước khi gửi biểu mẫu
        const selectedSeats = document.querySelectorAll('.selected');
        const selectedSeatsArray = Array.from(selectedSeats).map(seat => seat.dataset.seatNumber);
        const totalPrice = calculateTotalPrice(selectedSeats); // Hàm tính tổng giá tiền

        // Cập nhật giá trị vào các trường ẩn
        
        document.getElementById('selectedSeatsInput').value = selectedSeatsArray.join(' ');
    
        
        console.log(totalPrice);

        // Nếu muốn hiển thị thông báo, bạn có thể sử dụng alert hoặc modal ở đây

        // Chặn gửi biểu mẫu mặc định (chúng ta sẽ xử lý nó bằng AJAX)
        if(document.getElementById('selectedSeatsInput').value == ""){
            alert("vui lòng chọn ghế");
            event.preventDefault();
        }
    

        // Gọi hàm xử lý đặt vé bằng AJAX ở đây
        // Ví dụ: handleBooking();
    });
});

function calculateTotalPrice(selectedSeats) {
    // Hàm tính tổng giá tiền dựa trên thông tin ghế đã chọn
    // ... (Các phần tính toán giá tiền của bạn)
}

// Hàm xử lý đặt vé bằng AJAX (nếu bạn muốn sử dụng AJAX)
function handleBooking() {
    // Sử dụng XMLHttpRequest hoặc Fetch API để gửi dữ liệu đặt vé lên server
    // ... (Code xử lý AJAX của bạn)
}
</script>