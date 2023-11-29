<!-- Breadcrumb Begin -->
<!-- <div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="<?= $SITE_URL ?>/trang-chinh/index.php"><i class="fa fa-home"></i> TRANG CHỦ</a>
                    <a href="#">THỂ LOẠI</a>
                    <span>CHI TIẾT</span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">

                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="../../img/<?= $item['image'] ?>">
                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3><?= $item['name_movie'] ?></h3>
                            <!-- <span>フェイト／ステイナイト, Feito／sutei naito</span> -->
                        </div>
                        <div class="anime__details__rating">
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>1.029 Votes</span>
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
                                        <li><span>Diễn viên:</span> <?= $item['actor'] ?>, <?= $item['director'] ?>, <?= $item['producer'] ?></li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Thời lượng:</span> <?= $item['time'] ?></li>
                                        <li><span>Đánh giá:</span> 8.5 / 161 times</li>
                                        <!-- <li><span>Duration:</span> 24 min/ep</li> -->
                                        <li><span>Chất lượng:</span> HD</li>
                                        <li><span>Lượt xem:</span> <?= $item['view'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            <a href="<?= $SITE_URL ?>/trang-chinh/index.php?trailer" class="follow-btn">TRAILER</a>
                            <a href="#" class="watch-btn"><span>ĐẶT VÉ</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- trailer  -->



        <!-- binh luan  -->
        <?php require "binh-luan.php"; ?>
        <!-- end binh luan -->
    </div>
</section>
<!-- Anime Section End -->




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