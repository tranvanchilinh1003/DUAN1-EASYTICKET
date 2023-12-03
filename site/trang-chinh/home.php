

<!-- Product Section Begin -->
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/hero/hero-2.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Đặt vé</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/hero/hero-0.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Đặt vé</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/hero/hero-3.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Đặt vé</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>PHIM NGẪU NHIÊN</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="<?=$SITE_URL?>/phim/tim-kiem.php?all&page=1" class="primary-btn">XEM TẤT CẢ <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $items = movie_randum();
                        foreach ($items as $item) :
                            $movies_id = $item['id'];
                            $cmt = count_comment($movies_id);
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="<?= $SITE_URL . '/phim/chi-tiet.php?id=' .  $item['id']  ?>">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="../../img/<?= $item['image'] ?>">
                                            <div class="ep"><?= $item['type_name'] ?></div>
                                            <div class="comment"><i class="fa fa-comments"></i> <?= $cmt ?></div>
                                            <div class="view"><i class="fa fa-eye"></i> <?= $item['view'] ?></div>
                                        </div>
                                        <div class="product__item__text">
                                            <!-- <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul> -->
                                            <h5><a href="<?= $SITE_URL . '/phim/chi-tiet.php?id=' .  $item['id']  ?>"><?= $item['name_movie'] ?></a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top YÊU THÍCH</h5>
                        </div>
                        <?php
                        $top = movies_select_topview();

                        foreach ($top as $tops) {
                        ?>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years" data-setbg="../../img/<?= $tops['image'] ?>">
                                    <div class="ep"><?= $tops['type_name'] ?></div>
                                    <div class="view"><i class="fa fa-eye"></i> <?= $tops['view'] ?> </div>
                                    <h5><a href="<?= $SITE_URL . '/phim/chi-tiet.php?id=' .  $tops['id']  ?>" class="font-weight-bold"><?= $tops['name_movie'] ?></a></h5>
                                </div>

                            </div>

                        <?php
                        }
                        ?>
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>TOP BÌNH LUẬN NHIỀU NHẤT</h5>
                        </div>
                        <?php
                        $top_comment = movie_top_comment();
                        foreach ($top_comment as $key) {

                        ?>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="../../img/<?= $key['image'] ?>" width="80px" height="45px" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">

                                    <h5><a href="<?= $SITE_URL . '/phim/chi-tiet.php?id=' .  $key['id']  ?>"><?= $key['name_movie'] ?></a></h5>
                                    <span><i class="fa fa-comments"></i> <?= $key['so_luong'] ?></span>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->