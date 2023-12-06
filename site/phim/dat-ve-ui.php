
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
                            <option value="1">Cần thơ</option>
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

        <div class="btn-group btn-block mb-3" id="dates">
            <a class="btn btn-light text-muted date active" data-date="2023-12-02">
                2/12
                <br><span class="small text-nowrap">Th 7</span>
            </a>
            <a class="btn btn-light text-muted date" data-date="2023-12-03">
                3/12
                <br><span class="small text-nowrap">CN</span>
            </a>
            <a class="btn btn-light text-muted date" data-date="2023-12-04">
                4/12
                <br><span class="small text-nowrap">Th 2</span>
            </a>
            <a class="btn btn-light text-muted date" data-date="2023-12-05">
                5/12
                <br><span class="small text-nowrap">Th 3</span>
            </a>
            <a class="btn btn-light text-muted date" data-date="2023-12-06">
                6/12
                <br><span class="small text-nowrap">Th 4</span>
            </a>
            <a class="btn btn-light text-muted date" data-date="2023-12-07">
                7/12
                <br><span class="small text-nowrap">Th 5</span>
            </a>
        </div>

        <!-- <div class="alert alert-warning mb-3">
        <i class="fe fe-info"></i> Nhấn vào suất chiếu để tiến hành mua vé
    </div> -->
        <!-- Showtime  -->
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
                        <div class="list-group-item btn-select-cinema  ticketing-cinema-tracking ticketing-cinema ticketing-cinema-126818" data-cineplex="beta-cineplex" data-cinema="beta-cineplex-empire-binh-duong" data-cinema-id="126818" data-toggle="collapse" data-target="#showtime-cinema-126818">
                            <h4 class="text-body mb-0 name font-weight-normal">Rạp Easyticket Cần thơ</h4>
                            <div class="cinema collapse mt-0" id="showtime-cinema-126818">
                                <p class="small text-muted mb-3">Đ.Số 22, Thường Thạnh, Cái Răng, Cần Thơ. <a href="#">Thông tin rạp</a> - <a href="https://maps.google.com/?q=Beta Empire Bình Dương" target="_blank">Bản đồ</a></p>
                                <div class="mb-1">
                                    <label class="small mb-2 font-weight-bold d-block text-dark">
                                        2D Phụ Đề Việt
                                    </label>
                                    <a href="<?= $SITE_URL . '/phim/dat-ve.php?dat-ghe&id=' .  $item['id']  ?>" data-cineplex="lotte" data-cinema="lotte-can-tho" data-id="309438312" class="btn btn-sm btn-showtime btn-outline-dark is-ticketing" data-reference="c4f17d1d-ca04-45f1-bfbf-c316d182fa36">
                                        <span class="time">14:30</span>
                                        <span class="amenity price">85K</span></a> <a href="#" data-cineplex="lotte" data-cinema="lotte-can-tho" data-id="309438313" class="btn btn-sm btn-showtime btn-outline-dark is-ticketing" data-reference="553dacde-e2fa-4d2f-9c67-65d42a7afd78">
                                        <span class="time">21:30</span>
                                        <span class="amenity price">85K</span></a>
                                </div>
                                <!-- <div class="showtimes">
                                    <div class="text-center text-muted">
                                        <div class="spinner-border spinner-border-sm" role="status"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Showtime  -->
    </div>
</div>
<script>
    function selectShowtime(button) {
        // Remove 'selected' class from all showtime buttons
        var showtimeButtons = document.querySelectorAll('.showtime-btn');
        showtimeButtons.forEach(function(btn) {
            btn.classList.remove('selected');
        });

        // Add 'selected' class to the clicked showtime button
        button.classList.add('selected');
    }
</script>