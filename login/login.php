<?php

include '../admin/cruds/other_cruds/dbconnection.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email']; 
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = $_POST['pass'];
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $connection->prepare("SELECT * FROM `religious_tb` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){

      if($row['role'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:../admin/cruds/other_cruds/dashboad.php');

      }elseif($row['role'] == 'religious'){

         $_SESSION['religious_id'] = $row['id'];
         header('location:../admin/cruds/other_cruds/religious.php');

      }
      elseif($row['role'] == 'candidate'){

         $_SESSION['candidate_id'] = $row['id'];
         header('location:../admin/cruds/other_cruds/candidate.php');

      }
      elseif($row['role'] == 'vd'){

         $_SESSION['vd_id'] = $row['id'];
         header('location:../admin/cruds/other_cruds/religious.php');

      }else{
         $message[] = 'no user found!';
      }
      
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

   
</head>
<body>   
<section>
   <center>
   <form action="" method="post" enctype="multipart/form-data">   
   <div class="card" style="width: 25rem; margin-top: 7%; background-color: rgba(15,15,50,.2);">
      <img style="width: 10rem; margin-left: 28%; width: 50%; border-radius: 25%;" src="image/login.png" class="card-img-top" alt="login image">
         <div class="card-body">
            <?php
         if(isset($message)){
            foreach($message as $message){
               echo '
               <div class="message">
                  <span style="margin-left: 15%; color:red;">'.$message.'</span>
                     <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
               </div>
               ';
            }
       }
      ?>   
            <div class="mb-3">
               <input type="email" class="form-control" required placeholder="enter your email" name="email">             
            </div>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <div class="mb-3">
               <input type="password" class="form-control" required placeholder="enter your password" name="pass">
            </div>            
               <input type="submit" class="btn btn-primary" value="login now" name="submit">
               <a href="forgot_password.php" style="text-decoration: none;">Forgert password?</a>
         </div>
   </div> 
</form>
</section>
</center>
</body>
</html>