<style>
    .movie-container {
        text-align: center;
    }

    .movie-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .showtime-selection {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .showtime-btn {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .showtime-btn:hover {
        background-color: #297fb8;
    }

    .selected {
        background-color: #2ecc71;
    }
</style>
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2 class="text-warning">MUA VÉ TRỰC TUYẾN</h2>
                    <p><?= $item['name_movie'] ?></p>
                    <!-- <p><?= $item['actor'] ?>, <?= $item['director'] ?>, <?= $item['producer'] ?></p> -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->
<div class=" d-flex justify-content-center mt-5 mb-5">
    <div class="col-md-8 justify-content-center">

        <!-- <h2 class="text-center text-light">
            Mua vé trực tuyến
        </h2> -->

        <div class="card card-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <select class="form-control btn-select-region select2-hidden-accessible" data-toggle="select" tabindex="-1" aria-hidden="true">
                            <option value="1">Cần Thơ</option>
                        </select>
                        <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 702.4px;">
                            <span class="selection">
                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-r6wg-container">
                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                </span>
                            </span>
                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <form method="GET" action="<?= $SITE_URL ?>/phim/dat-ve.php?selected_date&id=<?= $item['id'] ?>&selected_date=">

            <div class="btn-group btn-block mb-3" id="dates">
                <?php
                // Lấy ngày hiện tại
                $currentDate = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
                $currentDayOfWeek = $currentDate->format('w');

                // Hiển thị nút cho ngày hiện tại và 6 ngày tiếp theo
                for ($i = 0; $i < 7; $i++) {
                    $date = $currentDate->format('Y-m-d');
                    $dayOfWeek = ($currentDayOfWeek + $i) % 7;
                    $activeClass = ($i === 0) ? 'active' : '';

                ?>
                    <a class='btn btn-light text-muted date <?php if($_GET['selected_date'] == $date){echo 'active';}else{echo "";}  ?>' data-date='<?= $date ?>' onclick='selectDate(this)'>
                        <?= $currentDate->format('d/m') ?><br>
                        <span class='small text-nowrap'><?= getDayOfWeekName($dayOfWeek); ?></span>
                    </a>
                <?php

                    $currentDate->modify('+1 day');
                }

                // Hàm chuyển đổi số thứ trong tuần sang tên thứ
                function getDayOfWeekName($dayOfWeek)
                {
                    $dayOfWeekNames = array(
                        'Chủ nhật',
                        'Thứ hai',
                        'Thứ ba',
                        'Thứ tư',
                        'Thứ năm',
                        'Thứ sáu',
                        'Thứ bảy'
                    );

                    return $dayOfWeekNames[$dayOfWeek];
                }
                ?>
            </div>
            <input type="hidden" name="id" id="movies_id" value="<?= $item['id'] ?>">
            <input type="hidden" name="selected_date" id="selected_date" value="">
        </form>

        <div id="showtimes">
            <div class="card">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item bg-light btn-select-cineplex sponsored-cineplex-tracking sponsored-cineplex sponsored-cineplex-18789" data-cineplex="beta-cineplex" data-toggle="collapse" data-target="#showtime-cineplex-18789">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-sm"><img src="" class="avatar-img rounded"></div>
                            </div>
                            <div class="col ml-n2">
                                <h4 class="text-body mb-1 name">Rạp Easyticket</h4>
                                <p class="small text-muted mb-0">1 rạp</p>
                            </div>
                            <div class="col-auto"><span class="text-muted h3"><i class="fe fe-chevron-right"></i></span></div>
                        </div>
                    </a>

                    <div class="list-group collapse show" id="showtime-cineplex-18789">
                        <div class="list-group-item btn-select-cinema  ticketing-cinema-tracking ticketing-cinema ticketing-cinema-126818" data-cineplex="beta-cineplex" data-cinema="beta-cineplex-empire-binh-duong" data-cinema-id="126818" data-toggle="<?php if (isset($find_cinemas['name'])) {
                                                                                                                                                                                                                                                                echo "collapse";
                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                echo "";
                                                                                                                                                                                                                                                            } ?>" data-target="#showtime-cinema-126818">
                            <h4 class="text-body mb-0 name font-weight-normal"><?= isset($find_cinemas['name']) ? $find_cinemas['name'] : "Chưa Có Xuất Chiếu"; ?></h4>
                            <div class="cinema collapse mt-0" id="showtime-cinema-126818">
                                <?php
                                if (isset($_GET['selected_date']) && count($find_all) > 0) {
                                    if (strtotime($selected_date) == strtotime($find_all[0]['date_show'])) {
                                ?>



                                        <p class="small text-muted mb-3"><?= $find_cinemas['location'] ?> </p>
                                        <div class="mb-1">
                                            <label class="small mb-2 font-weight-bold d-block text-dark">
                                                3D Phụ Đề Việt
                                            </label>
                                            <?php
                                            $id = $item['id'];
                                            $selected_date = $_GET['selected_date'];
                                            $cime = find_movie_cinemas($id, $selected_date);
                                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                                            
                                            $currentHour = date("H:i:s");
                                            foreach ($cime as $movie) {
                    
                                            ?>

                                                <a href="<?= $SITE_URL . '/phim/dat-ve.php?dat-ghe&id=' . $movie['id']   ?>" data-cineplex="lotte" data-cinema="lotte-can-tho" data-id="309438312" class="btn btn-sm btn-showtime btn-outline-dark is-ticketing <?php if($movie['start_time'] < $currentHour){echo 'disabled';}else{ echo '';} ?>" data-reference="c4f17d1d-ca04-45f1-bfbf-c316d182fa36">
                                                    <span class="time"><?= $movie['gio_bd'] ?>:<?= $movie['phut_bd'] ?> -</span>
                                                    <span class="amenity price"><?= $movie['gio_kt'] ?>:<?= $movie['phut_kt'] ?></span></a>


                                    <?php
                                            }
                                        } else {

                                            echo '<h4 class="text-body mb-0 mt-3 name font-weight-normal">Chưa Có Xuất Chiếu</h4>';
                                        }
                                    }
                                    ?>
                                        </div>

                                        <!-- <div class="showtimes">
                                    <div class="text-center text-muted">
                                        <div class="spinner-border spinner-border-sm" role="status"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <?php


                    ?>
                </div>
            </div>
        </div>
        <!-- End Showtime  -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function selectDate(element) {
        // Remove the 'selected' class from all date buttons
        let dateButtons = document.getElementsByClassName('date');
        for (let i = 0; i < dateButtons.length; i++) {
            dateButtons[i].classList.remove('selected');
        }

        // Add the 'selected' class to the clicked date button
        

        // Get the selected date and format it as 'YYYY-MM-DD'
        let selectedDate = element.getAttribute('data-date');
        console.log(selectedDate);
        // Thực hiện yêu cầu AJAX đến trang PHP

        // Pass the selected date to the PHP script using AJAX
        document.getElementById('selected_date').value = selectedDate;
        document.forms[2].submit();


        element.classList.add('selected');

    }
</script>