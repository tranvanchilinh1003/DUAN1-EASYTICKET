<section class="normal-breadcrumb set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Chào Mừng Bạn Đến Với Phim Của EASY TICKET</h2>
                        <!-- <p><?=$_SESSION['cate'] ?></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product spad">
<div class="container">
<div class="row">
    
                        <?php
                    
                        foreach ($items as $item) :
                            $movies_id = $item['id'];
                            
                            $cmt = count_comment($movies_id);
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
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
    </section>