
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
   <form action="forgot_password_process.php" method="post">
   <div class="card" style="width: 25rem; margin-top: 7%; background-color: rgba(15,15,50,.2);">
      <img style="width: 10rem; margin-left: 28%; width: 50%; border-radius: 25%;" src="image/resetpass.png" class="card-img-top" alt="login image">
         <div class="card-body">
            <div class="col-auto">
				<input type="email" name="email" placeholder="Email address" class="form-control">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary" name="reset">Reset Password</button>
			</div>
         </div>
   </div> 
</form>
</section>
</center>
</body>
</html>