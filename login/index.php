

<?php   
session_start(); 
$dsn = 'mysql:host=localhost;dbname=newaadb';
$username = 'root';
$password = '';
$options =[];
$status = "";


try {
    
    $connection = new PDO($dsn, $username, $password, $options);  
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM religious_tb WHERE email = :username AND pass = :password";  
                $statement = $connection->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                  if (   $status = 1) {
                      $_SESSION["username"] = $_POST["username"];  
                     header("location:../home.php");  
                  }
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }
            } 
                      
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Ligin</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px; margin-top: 10%; background-color: rgba(15,50,15,.2);">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 style="text-align: center;">Login Please</h3><br />  
                <form method="post">  
                     <div class="row mb-3 justify-content-md-center">
			<label for="inputEmail" class="col-3 col-form-label">Email</label>
			<div class="col-lg-auto">
				<input type="email" name="username" id="inputEmail" class="form-control">
			</div>
		</div>
		<div class="row mb-3 justify-content-md-center">
			<label for="inputPassword" class="col-3 col-form-label">Password</label>
			<div class="col-lg-auto">
				<input type="password" name="password" id="inputPassword" class="form-control">
			</div>
		</div>
		<div class="row mb-3 justify-content-md-center">
			<div class="col-5">
				<input type="submit" name="login" class="btn btn-info" value="Login" /> 
			</div>
			<div class="col-auto">
				<a href="forgot_password.php">Forgot Password</a>
			</div>
		</div>
                      
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  