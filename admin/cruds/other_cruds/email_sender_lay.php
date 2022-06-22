<?php   
    if(isset($_POST['submit'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $midname = $_POST['midname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $location = $_POST['location'];
      $parish = $_POST['parish'];
      $msg = $_POST['message'];

      $to = 'assumptioneastafrica@gmail.com';
      $subject = 'Email from footer';
      $message ="First Name: ".$fname."Last Name: ".$lname."Mid Name: ".$midname."\n"."Phone: ".$phone."Location: ".$location."Parish: ".$parish."\n". "Wrote the following: "."\n\n".$msg;
      $headers="From: ".$email;

      if(mail($to, $subject, $headers)){
        echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
      }
      else{
        echo "Something went wrong!";
      }
    }
 ?>