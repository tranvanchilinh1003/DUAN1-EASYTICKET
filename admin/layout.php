<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EASYTICKET</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- link boostrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/style.css">
    <!-- End layout styles -->
    <!-- Toatsjs  Thư Viện-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="<?= $CONTENT_URL ?>/assets/img/logo_url.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:ital,wght@0,400;1,300&display=swap');

    body {
        font-family: 'Roboto Slab', sans-serif;
    }
</style>

<body>
    <div class="container-scroller">
        <?php
        require "menu.php";
        ?>
        <div class="container-fluid page-body-wrapper">
            <!-- nav -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="<?= $ADMIN_URL ?>/trang-chinh/"><img src="<?= $CONTENT_URL ?>/assets/img/logo_url.png" class="w-75 h-75" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-75">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control w-50" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-warning ms-3"  type="button" onmouseover="showSearchInput()" onmouseout="hideSearchInput()">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                                <h6 class="p-3 mb-0">Projects</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-file-outline text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-web text-info"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">UI Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-layers text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all projects</p>
                            </div>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>

                        </li>
                        <li class="nav-item dropdown border-lseft">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <!-- <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt=""> -->
                                    <img class="img-xs rounded-circle" src="../../img/<?= $_SESSION['img']  ?>" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $_SESSION["username"] ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Hồ sơ</h6>
                                <div class="dropdown-divider"></div>
                                <a href="<?=$ADMIN_URL?>/trang-chinh/index.php?profile" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Tài khoản</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?= $SITE_URL ?>/form/login_xuly.php?btn_logout" name='btn_logout' class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1 ">Đăng xuất</p>
                                    </div>
                                </a>

                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- End nav  -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php
                    require $VIEW_NAME;
                    ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-end ">
                        <p>
                            Bản Quyền &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> mọi quyền truy cập thuộc về team LÀNG ĐÁ&#128525<i class="fa fa-heart" aria-hidden="true"></i>: <a href="<?= $ADMIN_URL ?>/trang-chinh/" class="text-warning">EASY TICKET</a>
                        </p>
                    </div>
                </footer>
                <!-- partial -->
            </div>


            <!-- Ends container-->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= $ADMIN_URL ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= $ADMIN_URL ?>/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= $ADMIN_URL ?>/assets/js/off-canvas.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/misc.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/settings.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/todolist.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/chart.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/chartist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= $ADMIN_URL ?>/assets/js/dashboard.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/chart.js"></script>
    <script src="<?= $ADMIN_URL ?>/assets/js/chartist.js"></script>
    <!-- End custom js for this page -->
    <script>
    function showdeleteToast() {
        Toastify({
            text: "Xóa thành công!",
            duration: 2000, // Thời gian hiển thị toast (3 giây)
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: 'red',
        }).showToast();
    }
</script>
</body>

</html>