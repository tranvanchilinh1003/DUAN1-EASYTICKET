<!-- Product Section Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2><?= $title_site ?></h2>
                        <p><?=$word?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Danh Sách Các Bộ Phim</h4>
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <?php
                        $row_count= count(movies_select_all());
                    $trang = 'page';
                        $page = ceil($row_count / 12);
                        // $items  = movie_page();
                        foreach ($items as $item) :
                            
                            $movies_id = $item['id'];
                            $cmt = count_comment($movies_id);
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="<?= $SITE_URL . '/phim/chi-tiet.php?id=' .  $item['id']  ?>">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="../../img/<?= $item['image'] ?>">
                                        <div class="ep"><?= $item['type_name'] ?></div>
                                            <div class="comment"><i class="fa fa-comments"></i> <?=$cmt ?></div>
                                            <div class="view"><i class="fa fa-eye"></i><?= $item['view'] ?></div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="<?= $SITE_URL . '/phim/chi-tiet.php?id=' .  $item['id']  ?>"><?= $item['name_movie'] ?></a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>


            </div>
        
        </div>
    </div>
<?php
if(!isset($_POST['search'])){




?>
    <nav aria-label="Page navigation example " class="d-flex justify-content-center">
        <ul class="pagination ">
            <li class="page-item ">
                <a class="page-link bg-secondary text-white" href="<?=$SITE_URL?>/phim/tim-kiem.php?all&<?=$trang?>=1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
            for ($i = 1; $i <= $page; $i++) {
            ?>
                <li class="page-item "><a class="page-link text-white <?php  if($_GET['page'] == $i  ){ echo"bg-transparent"; } else{ echo"bg-secondary";} ?>" href="<?=$SITE_URL?>/phim/tim-kiem.php?all&<?=$trang?>=<?= $i ?>"><?php echo $i; ?></a></li>
            <?php
            }
            ?>
            <li class="page-item">
                <a class="page-link bg-secondary text-white" href="<?=$SITE_URL?>/phim/tim-kiem.php?all&<?=$trang?>=<?= $page ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
}


?>
</section>

<!-- Product Section End -->