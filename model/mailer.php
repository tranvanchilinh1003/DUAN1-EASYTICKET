<?php

require "PHPMailer-master/src/PHPMailer.php"; 
require "PHPMailer-master/src/SMTP.php"; 
require 'PHPMailer-master/src/Exception.php'; 
function mailerr($name,$email,$subject, $message){
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
   
             
  $mail->setFrom("$email" , "$name"); 
  $mail->addAddress('easyticket113@gmail.com', 'EasyTicket'); //mail người nhận  
  $mail->isHTML(true);  
  $mail->Subject = "$subject";    
  $noidung = "
  <h3>Thư Liên Hệ Khách Hàng</h3>
 <p>Email Khách Hàng: $email </p> 
 <p>Nội Dung Liên Hệ: $message</p> 
 
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

