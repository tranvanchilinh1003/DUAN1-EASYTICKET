<!-- <style>
     .rate {

         border-bottom-right-radius: 12px;
         border-bottom-left-radius: 12px;

     }



     .rating {
         display: flex;
         flex-direction: row-reverse;
         justify-content: center
     }

     .rating>input {
         display: none
     }

     .rating>label {
         position: relative;
         width: 1em;
         font-size: 30px;
         font-weight: 300;
         color: #FFD600;
         cursor: pointer
     }

     .rating>label::before {
         content: "\2605";
         position: absolute;
         opacity: 0
     }

     .rating>label:hover:before,
     .rating>label:hover~label:before {
         opacity: 1 !important
     }

     .rating>input:checked~label:before {
         opacity: 1
     }

     .rating:hover>input:checked~label:before {
         opacity: 0.4
     }


     .buttons {
         top: 36px;
         position: relative;
     }


     .rating-submit {
         border-radius: 15px;
         color: #fff;
         height: 49px;
     }


     .rating-submit:hover {

         color: #fff;
     }
 </style> -->
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
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
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/hero/hero-3.jpg">
                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>Fate Stay Night: Unlimited Blade</h3>
                            <span>フェイト／ステイナイト, Feito／sutei naito</span>
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
                        <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
                            their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
                            never to be seen again. But her mother’s last words send Hina on a quest to find a
                            legendary hero from the Waste War - the fabled Ace!</p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Type:</span> TV Series</li>
                                        <li><span>Studios:</span> Lerche</li>
                                        <li><span>Date aired:</span> Oct 02, 2019 to ?</li>
                                        <li><span>Status:</span> Airing</li>
                                        <li><span>Genre:</span> Action, Adventure, Fantasy, Magic</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Scores:</span> 7.31 / 1,515</li>
                                        <li><span>Rating:</span> 8.5 / 161 times</li>
                                        <li><span>Duration:</span> 24 min/ep</li>
                                        <li><span>Quality:</span> HD</li>
                                        <li><span>Views:</span> 131,541</li>
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
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>BÌNH LUẬN</h5>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="<?= $CONTENT_URL ?>/assets/img/anime/review-1.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                "demons" LOL</p>
                        </div>
                    </div>

                    <div class="anime__details__form mt-5">
                        <div class="section-title">
                            <h5>BÌNH LUẬN CỦA BẠN</h5>
                        </div>

                        <?php
                        if (!isset($_SESSION['username'])) {
                            echo '<h5 class="text-center"><i class="text-danger">Đăng nhập để bình luận về phim này</i></h5>';
                            echo '<div class="d-flex justify-content-center mt-4">';
                            echo '<a href="../form/login_xuly.php"><button type="submit" class="btn btn-danger d-flex justify-content-center" style="background: #e53637;">ĐĂNG NHẬP</button></a>';
                            echo '</div>';
                        } else {
                        ?>
                            <form method="POST" action="#" id="comment-form" name="comment-form" class="comment-form">
                                <div class="rating">
                                    <input type="radio" name="ratings" value="5" id="5"><label for="5">☆</label>
                                    <input type="radio" name="ratings" value="4" id="4"><label for="4">☆</label>
                                    <input type="radio" name="ratings" value="3" id="3"><label for="3">☆</label>
                                    <input type="radio" name="ratings" value="2" id="2"><label for="2">☆</label>
                                    <input type="radio" name="ratings" value="1" id="1"><label for="1">☆</label>
                                </div>
                                <textarea placeholder="Bình luận của bạn" name="message" id="message"></textarea> <span class="error text-danger"></span><br>
                                <button type="submit"><i class="fa fa-location-arrow" name="pull_comment"></i>ĐĂNG</button>
                            </form>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->
<script>
     var form_message = document.getElementById("comment-form");
     form_message.addEventListener('submit', function(event) {
         var message = document.getElementById("message");
         var error = document.getElementsByClassName("error");
         var has_error = true;
         error[0].innerHTML = '';
         if (message.value.trim() === "") {
             error[0].innerHTML = 'Vui lòng nhập bình luận của bạn.';
             has_error = false;
         }
         if (has_error == false) {
             event.preventDefault();
         }
     });
 </script>