<?php  session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link href="../../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        

        <script src="../../js/js_font.js"></script>        
    </head>
	<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Administration</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
                <li class="nav-item dropdown">                
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-lock fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                        
                        <li><a class="dropdown-item" href="../../../login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

<body>  
<section style="margin-left: 15%;"> 
    <center>
        <div class="row row-cols-1">
             <?php  
  
 if(isset($_SESSION["name"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["name"].'</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:login_members.php");  
 }  
 ?> 
            <div class="col-5">
                <a href="#">
                  <div class="card h-100">
                    <img src="../../../assets/images/library.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Important documents about us</h5>
                        </div>
                  </div>
                </a>
            </div>
                         
            <div class="col-5">
                <a href="">
                <div class="card h-100">
                    <img src="../../../assets/images/application.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Documents Needed in application process</h5>
                        </div>
                </div>
                  </a>
            </div>
          
            
            <div class="col-5">
                <a href="">
                <div class="card h-100">
                    <img src="../../../assets/images/comeandsee.jpg" class="card-img-top" height="350" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Come and See Program</h5>
                        </div>
                </div>
                </a>
            </div>
            
            
            <div class="col-5">
                <a href="../../../messaging/index.php">
                <div class="card h-100">
                    <img src="../../../assets/images/chat.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chat for more details</h5>
                        </div>
                </div>
            </div>
            </a>
        </div>
    </center>

</section>

</body>
