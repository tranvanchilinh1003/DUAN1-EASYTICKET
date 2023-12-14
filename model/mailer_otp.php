<?php

require "PHPMailer-master/src/PHPMailer.php"; 
require "PHPMailer-master/src/SMTP.php"; 
require 'PHPMailer-master/src/Exception.php'; 
function mailerr($information,$otp, $username){
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {
  $mail->SMTPDebug = 0;  // 0,1,2: chế độ debug
  $mail->isSMTP();  
  $mail->CharSet  = "utf-8";
//   $$mail->Debugoutput = 'html';
  $mail->Host = "tls://smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPSecure = "tls";
  $mail->SMTPAuth = true;

  $mail->Username= 'chilinh140220@gmail.com';
  $mail->Password = 'qfrm shwj eiau zgvi'; // mật khẩu ứng dụng
   
             
  $mail->setFrom("easyticket113@gmail.com" , "EasyTicket"); 
  $mail->addAddress("$information", "$username"); //mail người nhận  
  $mail->isHTML(true);  
  $mail->Subject = "Khôi Phục Tài Khoản";    
  $noidung = "
  <h3>Mã OTP Vui Lòng Không Cho Người Khác Xem</h3>
 <p>Email Người Gửi : easyticket113@gmail.com </p> 
 <p>Mã OTP Là: $otp</p> 
 
  ";
  $mail->Body = nl2br($noidung); //nội dung thư
  $mail->smtpConnect( array("tls" => array(
      "verify_peer" => false,
      "verify_peer_name" => false,
      "allow_self_signed" => true
  )));
  $mail->send();
//   echo 'Đã gửi mail xong';
} catch (Exception $e) {
   echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}
}
?>

