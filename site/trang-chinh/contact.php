<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EASY TICKET</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= $CONTENT_URL ?>/assets/img/logo_url.png">
    <!-- Latest compiled and minified CSS -->
  <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">-->

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
    <style>
       h2{
        color: #fff;
       }
       .box-register .form-group-sdt {
          width: 48%;
          float: left;
          margin: 4px; 
       }
       .box-register .form-group-email {
          width: 48%;
          float: right;
          padding-top: 4px;
      
       }
      

       

    </style>

<div class="container">
        <h2 class="text-uppercase text-center my-5 ">LIÊN HỆ - EASY TICKET</h2>
        <form action="">
            <div class="form-group ">
                <input type="text" placeholder="Họ Và Tên" id="register-full name" name="register-full name" class="form-control">
            </div>
            <div class="box-register ">
                <div class="form-group-sdt ">
                    <input type="text" placeholder="Số Điện Thoại" id="register-sdt" name="register-sdt" class="form-control">
                </div>
                <div class="form-group-email ">
                    <input type="email" placeholder="Email" id="register-email" name="register-email "class="form-control">
                </div>
            </div>
            <div class="form-group my-5 ">
                    <label for="register-noi-dung "></label>
                    <textarea cols="100" rows="10" placeholder="Nội dung" id="register-noi-dung" name="register-noi-dung " class="form-control"></textarea>
                </div>
       
                    <div class="form-button">
                        <input type="button" value="Gửi đi">
                         <a href="lien-he.php"><input type="reset" value="Nhập Lại"></a> 
                    </div>
        </form>

    </div>

    
</body>
</html>





