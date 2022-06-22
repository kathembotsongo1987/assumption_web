
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">  

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>


  <div class="d-md-flex half">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 ><strong class="text-uppercase" style="color: blue;">Change Password</strong> <a href="login.php" style="margin: 20px; background: red;  border-radius: 30%; padding-top: 7px;"><button type="button" class="btn-close" aria-label="Close" ></button></a></h3>

              </div>

              <form action="forgot_password_process.php" method="post">
               		<div class="form-group first">
                      <div class="label_class">
                        <label>Username</label>
                      </div>                  
                  		<div class="input_class">
                      		<input type="username" name="username" placeholder="username" class="form-control" required>
                   		</div> 
                      <div class="label_class">
                        <label>New Password</label>
                      </div>                  
                      <div class="input_class">
                          <input type="password" name="new_password" placeholder="new_password" class="form-control" required>
                      </div>                   
                  	</div>
                	<div class="form-group first">                  
                  		<div class="input_class">
                      		<button type="submit" class="btn btn-primary" name="reset">Reset</button>
                   		</div>                   
                  	</div>              
              </form>
            </div>
          </div>
        </div>
      </div>    
  </div>
    
    <script src="js/main.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
  </body>
</html>







