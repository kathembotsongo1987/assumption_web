<?php 
	if(isset($_POST['reset'])) {
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
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dieudonnekathembotsongo@gmail.com';                     //SMTP username
    $mail->Password   = 'pielizykxltoqynd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dieudonnekathembotsongo@gmail.com', 'Admin');
    $mail->addAddress($email);     //Add a recipient
   
   	$code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLMZXCVBN'),0,10);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http://localhost/services_automation/login/change_password.php?code='.$code.'">here</a>. ,<br>Reset your password in a day.';

    $conn = new mySqli('localhost', 'root', '', 'newaadb');

    if($conn->connect_error){
    	die('Could not connect to the database');
    }

    $verifyQuery = $conn->query("SELECT * FROM religious_tb WHERE email = '$email'");

    if($verifyQuery->num_rows){
    	$codeQuery = $conn->query("UPDATE religious_tb SET code = '$code' WHERE email = '$email'");

    $mail->send();
    echo 'Message has been sent to your email';
    }
    $conn->close();
       
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

 ?>