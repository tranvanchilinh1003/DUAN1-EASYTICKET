<!-- Anime Section Begin -->
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
<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">

                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="../../img/<?= $item['image'] ?>">
                        <div class="comment"><i class="fa fa-comments"></i> <?= $cmt  ?></div>
                        <div class="view"><i class="fa fa-eye"></i> <?= $item['view'] ?></div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3 class='text-warning'><?= $item['name_movie'] ?></h3>
                            <!-- <span>フェイト／ステイナイト, Feito／sutei naito</span> -->
                        </div>
                        <div class="anime__details__rating">
                        <div class="rate d-flex ">
                                <svg style="display:none;">
                                    <defs>
                                        <symbol id="fivestars" class="border-none">
                                            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#0b0c2a" fill-rule="evenodd" />
                                            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#0b0c2a" fill-rule="evenodd" transform="translate(24)" />
                                            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#0b0c2a" fill-rule="evenodd" transform="translate(48)" />
                                            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#0b0c2a" fill-rule="evenodd" transform="translate(72)" />
                                            <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#0b0c2a" fill-rule="evenodd" transform="translate(96)" />
                                        </symbol>
                                    </defs>
                                </svg>
                                <div class="rating-1">
                                    <progress class="rating-bg" value="<?= round($avr_ratings, 1); ?>" max="5"></progress>
                                    <svg>
                                        <use xlink:href="#fivestars" />
                                    </svg>
                                </div>
                            </div>


                            <span><?= round($avr_ratings, 1); ?> / 5</span>
                        </div>
                        <h5 class="text-light">Mô tả: </h5>
                        <p><?= $item['discretion'] ?></p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Thể loại:</span> <?= $item['type_name'] ?></li>
                                        <!-- <li><span>Studios:</span> Lerche</li> -->
                                        <li><span>Ngày chiếu:</span> <?= $item['date_movie'] ?></li>
                                        <li><span>Trạng thái:</span> <?= $item['status'] == 1 ? "Đang chiếu" : "Xắp chiếu"; ?></li>
                                        <li><span>Chất lượng:</span> HD</li>
                                        <li><span>Lượt Truy Cập:</span> <?= $item['view'] ?></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Thời lượng:</span> <?= $item['time'] ?></li>
                                        <li><span>Đánh giá:</span> 8.5 / 161 times</li>
                                        <!-- <li><span>Duration:</span> 24 min/ep</li> -->
                                        <li><span>Nhà Sản Xuất:</span> <?= $item['producer'] ?></li>
                                        <li><span>Đạo Diễn:</span> <?= $item['director'] ?></li>
                                        <li><span>Diễn viên:</span> <?= $item['actor'] ?></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            <!-- <a href="<?= $SITE_URL ?>/trang-chinh/index.php?trailer" class="follow-btn">TRAILER</a> -->
                            <!-- <a href="<?= $SITE_URL . '/phim/dat-ve.php?dat-ve&id=' .  $item['id']  ?>" class="watch-btn" name="dat-ve"><span>ĐẶT VÉ</span> <i class="fa fa-angle-right"></i></a> -->
                            <?php
                            if (isset($_SESSION['username'])) {

                            ?>
                                <!-- <a href="<?= $SITE_URL ?>/trang-chinh/index.php?trailer" class="follow-btn">TRAILER</a> -->
                                <a href="<?= $SITE_URL . '/phim/dat-ve.php?dat-ve&id=' .  $item['id']  ?>" class="watch-btn"><span>ĐẶT VÉ</span> <i class="fa fa-angle-right"></i></a>
                            <?php
                            } else {


                            ?>

                                <a href="<?= $SITE_URL ?>/form/login_xuly.php" class="watch-btn"><span>ĐẶT VÉ</span> <i class="fa fa-angle-right"></i></a>
                            <?php


                            }

                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- trailer  -->
        <section class="anime-details spad">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h5>TRAILER</h5>
                    </div>
                    <div class="col-lg-12">
                        <div class="anime__video__player">
                            <iframe width="100%" height="600" src="<?= $item['trailer'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- binh luan  -->
                <?php require "binh-luan.php"; ?>
                <!-- end binh luan -->
            </div>
        </section>
        <!-- trailer End -->


    </div>
</section>







<script>
    var form_content = document.getElementById("comment-form");
    form_content.addEventListener('submit', function(event) {
        var content = document.getElementById("content");
        var ratings = document.getElementsByClassName("ratings");
        var error = document.getElementsByClassName("error");
        var has_error = true;
        error[0].innerHTML = '';
        error[1].innerHTML = '';
        if (!ratings[0].checked && !ratings[1].checked && !ratings[2].checked && !ratings[3].checked && !ratings[4].checked) {
            error[0].innerHTML = 'Vui lòng chọn đánh giá của bạn';
            has_error = false;
        }
        if (content.value.trim() == "") {
            error[1].innerHTML = 'Vui lòng nhập bình luận của bạn.';
            has_error = false;
        }
        if (has_error == false) {
            event.preventDefault();
        }
    });
</script>