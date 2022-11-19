<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';





if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host =' smtp.office365.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'amjad.jil@hotmail.com';
  $mail->Password = 'mtrsbmgorxkpfsim';
  $mail->SMTPSecure = 'STARTTLS';
  $mail->Port = 587;
  
  $mail->setFrom('amjad.jil@hotmail.com');

  $mail->addAddress($_POST["email"]);

  $mail->isHTML(true);

  $mail->Subject = $_POST["subject"];
  $mail->Body = $_POST["message"];

  $mail->send();

  echo
  "
  <script>
    alert('sent Successfully');
    document.location.href ='index.html';
  </script>
  ";

}

?>