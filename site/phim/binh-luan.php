
<style>
    /* rate - ngôi sao */
    .rating-1 {
        width: 120px;
        height: 24px;
        position: relative;
        background-color: gray;
    }

    progress.rating-bg {
        -webkit-appearance: none;
        appearance: none;
        border: none;
        display: inline-block;
        height: 24px;
        width: 100%;
        color: #FBD947;
    }

    progress.rating-bg::-webkit-progress-value {
        background-color: #FBD947;
    }

    progress.rating-bg::-moz-progress-bar {
        background-color: #FBD947;
    }

    .rating-1 svg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #fivestars-1 path {
        border: none !important;
    }
</style>
<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="anime__details__review">
            <div class="section-title">
                <h5>BÌNH LUẬN</h5>
            </div>
            <?php foreach ($binh_luan_list as $bl) :
                // $_SESSION['users_id'] = $bl['users_id'];
            ?>
                <div class="anime__review__item">
                    <div class="anime__review__item__pic">
                        <img src="../../img/<?= $bl['image'] ?>" alt="">
                    </div>
                    <div class="anime__review__item__text">

                        <h6><?= $bl['username'] ?> <span> <?= $bl['comment_date'] ?></span></h6>
                        <!-- <i class="bi bi-star-fill text-warning"></i> -->
                        <!-- ngôi sao quý hiếm  -->
                        <div class="rate d-flex ">
                            <svg style="display:none;">
                                <defs>
                                    <symbol id="fivestars-1" class="border-none">
                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#1d1e39" fill-rule="evenodd" />
                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#1d1e39" fill-rule="evenodd" transform="translate(24)" />
                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#1d1e39" fill-rule="evenodd" transform="translate(48)" />
                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#1d1e39" fill-rule="evenodd" transform="translate(72)" />
                                        <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24" fill="#1d1e39" fill-rule="evenodd" transform="translate(96)" />
                                    </symbol>
                                </defs>
                            </svg>
                            <div class="rating-1">
                                <progress class="rating-bg" value="<?= $bl['ratings'] ?>" max="5"></progress>
                                <svg>
                                    <use xlink:href="#fivestars-1" />
                                </svg>
                            </div>
                        </div>
                        <!--end ngôi sao quý hiếm  -->
                        <!-- <br> -->
                        <p class="mt-2"><?= $bl['content'] ?></p>

                    </div>
                </div>
            <?php endforeach ?>
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
                    <form method="POST" action="chi-tiet.php?pull_comment" id="comment-form" name="comment-form" class="comment-form">
                        <div class="rating">
                            <input type="radio" class="ratings" name="ratings" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" class="ratings" name="ratings" value="4" id="4"><label for="4">☆</label>
                            <input type="radio" class="ratings" name="ratings" value="3" id="3"><label for="3">☆</label>
                            <input type="radio" class="ratings" name="ratings" value="2" id="2"><label for="2">☆</label>
                            <input type="radio" class="ratings" name="ratings" value="1" id="1"><label for="1">☆</label>
                        </div>
                        <span class="error text-danger"></span>

                        <textarea placeholder="Bình luận của bạn" name="content" id="content"></textarea> <span class="error text-danger"></span><br>
                        <button type="submit"><i class="fa fa-location-arrow" name="pull_comment"></i>ĐĂNG</button>
                    </form>
                <?php
                } ?>
            </div>
        </div>
    </div>
</div>