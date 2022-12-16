<?php   
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $msg = $_POST['msg'];

      $to = 'dieudonnekathembotsongo@gmail.com';
      $subject = 'Email from footer';
      $message ="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
      $headers="From: ".$email;

      if(mail($to, $subject, $headers)){
        echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
      }
      else{
        echo "Something went wrong!";
      }
    }
 ?>