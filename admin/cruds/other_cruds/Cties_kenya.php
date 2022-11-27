
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
        <script src="../../js/js_font.js"></script> 
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <?php  
            if(isset($_SESSION["username"]))  
            {  
             echo '<h3 style="color:white;">Welcome - '.$_SESSION["username"].', enjoy our service</h3>'; 
            }  
            else  
                {  
                header("location:../../../login/login_religious.php");  
                }  
                ?>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">                               
                <?php echo '<br /><br /><a style="color:white;" href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>'; ?>
            </ul>
    </nav>       
    </head>    
<body>  
  <section style="margin: 10%;"> 
    <container>
      <center>
      <div>
        <h1>Commununities in respective countries</h1>
      </div>  
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card" style="background-color: rgba(15,15,100,.2);">
        <div class="card-body bg-primary" style="margin: 70px;">
        <h2 class="card-title">Kenya</h2>
        <div style="color: white; font-size: 90px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM communitieskenya");
          if($query->rowCount()){
          ECHO $query->rowCount();
          }else{
            echo '0';
          }
          ?>
          </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="background-color: rgba(105,105,100,.2);">
      <div class="card-body bg-warning" style="margin: 70px;">
        <h2 class="card-title">Tanzania</h2>
        <div style="color: white; font-size: 90px;"> 
       <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM communitiestanzania");
          if($query->rowCount()){
          ECHO $query->rowCount();
          }else{
            echo '0';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="background-color: rgba(205,205,10,.2);">
      <div class="card-body bg-success" style="margin: 70px;">
        <h2 class="card-title">Uganda</h2>
        <div style="color: white; font-size: 90px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM communitiesuganda");
          if($query->rowCount()){
          ECHO $query->rowCount();
          }else{
            echo '0';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  
</div>
</center>
    </container>

</section>

</body>


