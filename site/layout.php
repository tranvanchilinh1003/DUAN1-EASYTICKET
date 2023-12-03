<?php
// require "../global.php";
// require "../../model/user.php";
require_once "../../model/categories.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EASY TICKET</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= $CONTENT_URL ?>/assets/img/logo_url.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:ital,wght@0,400;1,300&display=swap');

    body {
        font-family: 'Roboto Slab', sans-serif;
    }


    .header__menu ul {
        list-style-type: none;
        /* color: yellow; */
        margin: 0;
        padding: 0;
    }

    .header__menu li {
        display: inline-block;

        margin-right: 10px;
    }

    .header__menu li a {
        text-decoration: none;
        color: red;
    }

    .header__menu li a:hover {

        text-decoration: none;
        border-bottom: 3px solid yellow;

    }

    .footer__nav {
        float: left;
        width: 100%;
    }

    .footer__nav .active {
        float: left;
        width: 25%;

    }

    .footer__nav .active strong {
        color: orange;
        text-align: left;
        width: 100%;


    }

    .footer__nav .active a {
        text-align: left;
        width: 100%;
    }

    .footer__nav .active li a {
        text-align: left;

    }

    .footer__nav .active-box1 {
        float: left;
        width: 20%;
        text-align: left;

    }

    .footer__nav .active-box1 strong {
        text-align: left;
        color: orange;
        width: 100%;
    }

    .footer__nav .active-box1 a {
        width: 100%;
        text-align: left;
    }



    .footer__nav .active-box3 {
        float: left;
        width: 40%;
        text-align: left;

    }

    .footer__nav .active-box3 strong {
        color: orange;
        width: 100%;
    }

    .active-box3 i {
        text-align: left;
        width: 100%;
        color: #fff;

    }

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
</style>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 d-flex align-items-center ">
                    <div class="header__logo">
                        <a href="../trang-chinh/index.php">
                            <img src="<?= $CONTENT_URL ?>/assets/img/studio.png" height="30px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul class='home_nav'>
                                <li class="active"><a href="<?= $SITE_URL ?>/trang-chinh/index.php">Trang Chủ</a></li>
                                <!-- <li><a href="<?= $SITE_URL ?>/form/login_xuly.php?btn_logout" name='btn_logout'> <i class="bi bi-power  text-danger"></i></a></li> -->
                                <li><a href="#">Thể Loại <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown mt-1">
                                        <?php
                                        $move = categories_select_all();
                                        foreach ($move as $categories) {
                                        ?>
                                            <li><a href="#" value="<?= $categories['id'] ?>"><?= $categories['type_name'] ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li><a href="<?= $SITE_URL ?>/trang-chinh/index.php?tin-tuc">Tin Tức</a></li>
                                <li><a href="<?= $SITE_URL ?>/trang-chinh/index.php?lien-he">Liên Hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="dropdow">
                    <div class="header__right ">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li>
                                    <form class="navbar-form" action="<?= $SITE_URL?>/phim/tim-kiem.php" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control search-input " name= "keyword" placeholder="Tìm Kiếm...">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-warning search-button" name="search" type="submit"  >
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                                <?php
                                if (isset($_SESSION["username"])) {
                                ?>
                                    <li>
                                        <img style="border-radius: 50%;" src="../../img/<?= $_SESSION['img'] ?>" width="30px" alt="">
                                        <label for="hover" class="text-white"><?= $_SESSION["username"] ?></label>
                                        <ul class="dropdown " id='hover'>
                                            <li><a href="<?= $SITE_URL ?>/form/login_xu_ly_thong_tin.php?btn_edit"><i class="bi bi-person h5"></i> Tài Khoản</a></li>
                                            <li><a href="<?= $SITE_URL ?>/form/login_xuly.php?btn_logout" name='btn_logout'> <i class="bi bi-power h5  text-danger"></i> Đăng Xuất </a></li>
                                        </ul>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li><a href="#"><span class="icon_profile"></span></a>
                                        <ul class="dropdown">
                                            <li><a href="<?= $SITE_URL ?>/form/login_xuly.php">Đăng Nhập</a></li>
                                            <li><a href="<?= $SITE_URL ?>/form/signup_xuly.php">Đăng Ký</a></li>
                                    
                                        </ul>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->


    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <!-- <section class="product spad "  style="background-color: #0B0C2A;">
        <div class="container">
            <div class="row"> -->
    <?php
    require $VIEW_NAME;
    ?>
    <!-- </div>
    </section> -->
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="../trang-chinh/index.php"><img src="<?= $CONTENT_URL ?>/assets/img/studio.png" alt=""></a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active">
                                <p><strong>TRUY CẬP NHANH</strong></p>
                                <a href="<?= $SITE_URL ?>/trang-chinh/index.php">Trang Chủ </a>
                                <a href="#">Thể Loại</a>
                                <a href="<?= $SITE_URL ?>/trang-chinh/index.php?tin-tuc">Tin Tức</a>
                                <a href="<?= $SITE_URL ?>/trang-chinh/index.php?lien-he">Liên Hệ</a>
                            </li>
                            <li class="active-box1">
                                <p><strong>Thể Loại</strong> </p>
                                <?php
                                $move = categories_select_all();
                                foreach ($move as $categories) {
                                ?>
                                    <a href="#" value="<?= $categories['id'] ?>"><?= $categories['type_name'] ?></a>
                                <?php
                                }
                                ?>
                            </li>
                            <li class="active-box3">
                                <p><strong>Liên Hệ</strong></p>
                                <i>SĐT: 0987654123</i>
                                <i>Email:Easyticket@gmail.com</i>
                                <i>Địa Chỉ: Đ.Số 22, Thường Thạnh, Cái Răng, Cần Thơ.</i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>
                        Bản Quyền &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> mọi quyền truy cập thuộc về team LÀNG ĐÁ&#128525<i class="fa fa-heart" aria-hidden="true"></i>: <a href="<?= $SITE_URL ?>/trang-chinh/" class="text-warning">EASY TICKET</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?= $CONTENT_URL ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/assets/js/player.js"></script>
    <script src="<?= $CONTENT_URL ?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/assets/js/mixitup.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/assets/js/jquery.slicknav.js"></script>
    <script src="<?= $CONTENT_URL ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/assets/js/main.js"></script>

</body>

</html>