<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="<?= $ADMIN_URL ?>/index.php"><img src="<?= $ADMIN_URL ?>/assets/images/logo-mini.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini " href="<?= $ADMIN_URL ?>/index.php"><img src="<?= $CONTENT_URL ?>/assets/img/logo_url.png" class="h-75 w-75" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <!-- <i class="mdi mdi-speedometer"></i> -->
                    <i class="mdi mdi-home text-warning"></i>
                </span>
                <span class="menu-title">Trang chủ</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-bookmark-outline"></i>
                </span>
                <span class="menu-title">Quản lý loại</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Thêm Loại</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Danh sách</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <!-- <i class="mdi mdi-laptop"></i> -->
                    <i class="bi bi-film"></i>
                </span>
                <span class="menu-title">Quản lý phim</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Thêm phim</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Danh sách</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#aut" aria-expanded="false" aria-controls="aut">
                <span class="menu-icon">
                    <!-- <i class="mdi mdi-laptop"></i> -->
                    <i class="bi bi-person-circle text-primary"></i>
                </span>
                <span class="menu-title">Quản lý khách hàng</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="aut">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Thêm khách hàng</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Danh sách</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#">
                <span class="menu-icon">
                    <i class="bi bi-receipt-cutoff"></i>
                </span>
                <span class="menu-title">Quản lý hóa đơn</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-forum text-"></i>
                </span>
                <span class="menu-title">Quản lý bình luận</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Thống kê</span>
            </a>
        </li>
        <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
            </div>
        </li> -->
    </ul>
</nav>
<!-- partial -->