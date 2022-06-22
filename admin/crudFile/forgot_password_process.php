<?php 	
	if (isset($_POST['reset'])) {
		$email = $_POST['email'];
	}
	else{
		exit();
	}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dieudonnetsongo@gmail.com';                     //SMTP username
    $mail->Password   = 'dieudonne!@#$2021';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dieudonnetsongo@gmail.com', 'Admin');
    $mail->addAddress($email);     //Add a recipient
   
    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    // write the code that generate a random code
    $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLM'),0,10);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http/localhost/AssumptionistF/admin/crudFile/change_password.php?code='.$code.'">here</a>. </br>Reset your password in a day.';

  	// database connection
    
    $connection = new mySqli('location', 'root', '', 'aadb');

    if($connection->connect_error){
    	die('Could not connect to the database.');
    }

   $verifyQuery = $connection->query("SELECT * FROM admin WHERE email = '$email'");
   //If the user exist then store the data in the database
   if($verifyQuery->num_rows){
   	$codeQuery = $connection->query("UPDATE admin SET code = '$code' WHERE ehh = '$username'");

    $mail->send();
    echo 'Message has been sent, check your email';
   }

   	$connection->close();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

 ?>