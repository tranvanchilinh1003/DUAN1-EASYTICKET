<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>LIÊN HỆ</h2>
                    <p>Chào mừng đến với liện hệ chính thức của East Ticket.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
        color: #f39422;
    }

    a:hover,
    a:focus {
        text-decoration: none !important;
        outline: none !important;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5 {
        line-height: 1.5;
        font-weight: 400;
        font-family: "Poppins", Arial, sans-serif;
        color: #000;
    }

    .bg-primary {
        background: #f39422 !important;
    }

    .ftco-section {
        padding: 7em 0;
    }

    .ftco-no-pt {
        padding-top: 0;
    }

    .ftco-no-pb {
        padding-bottom: 0;
    }

    .heading-section {
        font-size: 28px;
        color: #000;
    }

    .img {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .form-control {
        height: 52px;
        background: transparent;
        color: rgba(255, 255, 255, 0.8) !important;
        font-size: 14px;
        border-radius: 0px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .form-control::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .form-control:-ms-input-placeholder {
        /* IE 0+ */
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .form-control:focus,
    .form-control:active {
        background: transparent;
        border-color: rgba(255, 255, 255, 0.5) !important;
    }

    textarea.form-control {
        height: inherit !important;
    }

    .wrapper {
        width: 100%;
        overflow: hidden;
        border-radius: 10px;
        -webkit-box-shadow: 0px 21px 41px -13px rgba(0, 0, 0, 0.18);
        -moz-box-shadow: 0px 21px 41px -13px rgba(0, 0, 0, 0.18);
        box-shadow: 0px 21px 41px -13px rgba(0, 0, 0, 0.18);
    }

    .contact-wrap {
        background: #272a34;
    }

    .contact-wrap h3 {
        color: #fff;
    }

    .info-wrap {
        background: #1c1e25;
    }

    .info-wrap h3 {
        color: white;
        font-size: 18px;
        position: relative;
    }

    .info-wrap .dbox {
        width: 100%;
        margin-bottom: 25px;
    }

    .info-wrap .dbox:last-child {
        margin-bottom: 0;
    }

    .info-wrap .dbox p {
        margin-bottom: 0;
    }

    .info-wrap .dbox p span {
        font-weight: 400;
        color: #fff;
    }

    .info-wrap .dbox p a {
        color: rgba(255, 255, 255, 0.3);
    }

    .info-wrap .dbox .icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.02);
    }

    .info-wrap .dbox .icon span {
        font-size: 20px;
        color: #fff;
    }

    .info-wrap .dbox .text {
        width: calc(100% - 50px);
    }

    .btn {
        padding: 12px 16px;
        cursor: pointer;
        border-width: 1px;
        border-radius: 2px;
        font-size: 14px;
        font-weight: 400;
        -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
        box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
        position: relative;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .btn:hover,
    .btn:active,
    .btn:focus {
        outline: none !important;
        -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
        -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
        box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
    }

    .btn.btn-primary {
        background: #f39422 !important;
        border-color: #f39422 !important;
        color: #fff;
    }

    .btn.btn-primary:hover,
    .btn.btn-primary:focus {
        border-color: #d67a0c !important;
        background: #d67a0c !important;
    }

    .contactForm .form-control {
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding: 0;
    }

    #contactForm .error {
        color: #f65c78;
        font-size: 12px;
    }

    #contactForm .form-control {
        font-size: 16px;
    }

    #message {
        resize: vertical;
    }

    #form-message-warning,
    #form-message-success {
        display: none;
    }

    #form-message-warning {
        color: red;
    }

    #form-message-success {
        color: #28a745;
        font-size: 18px;
        font-weight: 500;
    }

    .submitting {
        float: left;
        width: 100%;
        padding: 10px 0;
        display: none;
        font-size: 16px;
        font-weight: 500;
    }
</style>
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                <h3 class="mb-4">Viết Cho Chúng Tôi</h3>
                                <form method="POST" action="./index.php?lien-he" id="contactForm" name="contactForm" class="contactForm" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Tên...">
                                                <span class="error text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
                                                <span class="error text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề...">
                                                <span class="error text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Lời nhắn của bạn..."></textarea>
                                                <span class="error text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary " name="lien-he" value="Gửi lời nhắn">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                                <h3>Thông tin liên lạc</h3>
                                <p class="mb-4 text-white">
                                    Chúng tôi sẵn sàng tiếp nhận mọi đề xuất hoặc chỉ để trò chuyện.</p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Địa Chỉ: </span>Đ.Số 22, Thường Thạnh, Cái Răng, Cần Thơ.</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Số Điện Thoại:</span> <a href="#">+1234567890</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a href="#"><span class="__cf_email__ text-warning" data-cfemail="bdd4d3dbd2fdc4d2c8cfced4c9d893ded2d0">EasyTicket@gmail.com</span></a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website:</span> <a href="<?=$SITE_URL?>/trang-chinh/">EASY TICKET</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.752748004251!2d105.77503307481068!3d10.03725057239308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0881ebde20ebd%3A0x3a38b82dd5f06c94!2zMTQwIMSQLiBMw70gVOG7sSBUcuG7jW5nLCBBbiBDxrAsIE5pbmggS2nhu4F1LCBD4bqnbiBUaMahLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1700838848385!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var form_insert = document.getElementById("contactForm");
    form_insert.addEventListener('submit', function(event) {
        var nameInput = document.getElementById("name");
        var emailInput = document.getElementById("email");
        var emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.(com|vn|org|gov|co)|fpt\.edu\.vn)$/;
        var subjectInput = document.getElementById("subject");
        var messageInput = document.getElementById("message");
        var error = document.getElementsByClassName("error");
        var has_error = true;
        error[0].innerHTML = '';
        error[1].innerHTML = '';
        error[2].innerHTML = '';
        error[3].innerHTML = '';
        if (nameInput.value.trim() === "") {
            error[0].innerHTML = 'Vui lòng nhập tên.';
            has_error = false;
        }
        if (!emailRegex.test(emailInput.value.trim())) {
            error[1].innerHTML = 'Vui lòng nhập email .';
            has_error = false;
        }
        if (subjectInput.value.trim() === "") {
            error[2].innerHTML = 'Vui lòng nhập tiêu đề.';
            has_error = false;
        }
        if (messageInput.value.trim() === "") {
            error[3].innerHTML = 'Vui lòng nhập lời nhắn.';
            has_error = false;
        }
        if (has_error == false) {
            event.preventDefault();
        }
    });
</script>