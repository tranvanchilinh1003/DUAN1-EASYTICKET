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

                        <h6><?= $bl['username'] ?>  <span>(<?=$bl['ratings'] ?><i class="bi bi-star-fill text-warning"></i>)</span><br>
                        
                        
                        <span>  <?= $bl['comment_date'] ?></span></h6>
                        <p><?= $bl['content'] ?></p>

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