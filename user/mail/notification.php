

<?php

define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings Signed out
 

 if(isset($_POST['sregister']))
{

 



  $message='your account needs admin approval for login ...please wait for our further update';

  $a=$_POST['name'];
  $email=$_POST['email'];
  $c=$_POST['phno'];
  $d=$_POST['text'];
  $p=$_POST['password'];
 
  
     $stmt=$admin -> cud("INSERT INTO `seller` (name,phone,address,email,password) VALUES ('$a','$c','$d','$email','$p')","saved");
 


    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'vishakadapa@gmail.com';                     // SMTP username
    $mail->Password   = '7022560978v';                               // SMTP password
    $mail->SMTPSecure = 'ssl';;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('vishakadapa@gmail.com', 'admin');
    $mail->addAddress($email,$name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'this is subject';
    $mail->Body    = $message;
   
     
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    // $mail->AddEmbeddedImage($image); 

    $mail->send();

     //what you should do after sending mail
    echo"<script>
            alert('you notification is sent sucessfully wait for amin to approve your ac!!!');
            window.location.href='../mail/sellerlogin.php';
          </script>";

    exit();

}

} catch (Exception $e) {
  
  //error if somthing went wrong

    echo '<script>alert("Message could not be sent.")</script>';
}
?>





