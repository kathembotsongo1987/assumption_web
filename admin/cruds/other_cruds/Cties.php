
<?php 
include 'dbconnection.php'; 
 session_start();

$religious_id = $_SESSION['religious_id'];

if(!isset($religious_id)){
   header('location:../../../login/login.php');

} 
?>
 
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
            <h3 style="color: white;">
                <?php
                    $select_profile = $connection->prepare("SELECT * FROM `religious_tb` WHERE id = ?");
                    $select_profile->execute([$religious_id]);
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>

            <img style="width: 100%; height: 50px; border-radius: 50%;" src="upload/<?= $fetch_profile['image']; ?>" alt="">
            <h3 style="color: white";><?= $fetch_profile['name']; ?></h3>
            <a style="color: blue;" href="../../../login/religious_profile_update.php" class="btn"><h4>update profile</h4></a>
        </h3>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">                               
                <?php echo '<br /><br /><a style="color:white;" href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>'; ?>
            </ul>
    </nav>       
    </head>    
<body>  
  <section style="margin: 2%;"> 
    <container>
      <center>
      <div>
        <h1>Commununities in respective countries</h1>
      </div>  
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card" style="background-color: rgba(15,15,100,.2);">
      <h2 class="card-title">Kenya</h2>
      <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number of Communities</h3>
      <a href="religious_read_cty_kenya.php" style="text-decoration: none;">
        <div class="card-body bg-primary" style="margin: 70px;">        
        <div style="color: white; font-size: 140px;">
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM communities where country='kenya'");
          if($query->rowCount()){
          ECHO $query->rowCount();
          }else{
            echo '0';
          }
          ?>          
          </div>         
      </div>
       </a>
       <div style="background-color: rgba(200,12,150,.2);">
        <a href="religious_in_kenya.php" style="text-decoration: none;"><h3>Religious in Kenya</h3></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="background-color: rgba(105,105,100,.2);">
      <h2 class="card-title">Tanzania</h2>
      <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number of Communities</h3>
      <a href="religious_read_cty_tanzania.php" style="text-decoration: none;">
      <div class="card-body bg-warning" style="margin: 70px;">        
        <div style="color: white; font-size: 140px;"> 
       <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM communities where country='tanzania'");
          if($query->rowCount()){
          ECHO $query->rowCount();
          }else{
            echo '0';
          }
          ?>
        </div>
      </div>
      </a>
      <div style="background-color: rgba(200,12,150,.2);">
        <a href="religious_in_tanzania.php" style="text-decoration: none; color: yellow;"><h3>Religious in Tanzania</h3></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="background-color: rgba(205,205,10,.2);">
       <h2 class="card-title">Uganda</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number of Communities</h3>
       <a href="religious_read_cty_uganda.php" style="text-decoration: none;">
      <div class="card-body bg-success" style="margin: 70px;">
        <div style="color: white; font-size: 140px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM communities where country='uganda'");
          if($query->rowCount()){
          ECHO $query->rowCount();
          }else{
            echo '0';
          }
          ?>
        </div>
      </div>
      </a>
      <div style="background-color: rgba(200,12,150,.2);">
        <a href="religious_in_uganda.php" style="text-decoration: none; color: green;"><h3>Religious in Uganda</h3></a>
      </div>
    </div>
  </div>  
</div>
</center>
    </container>

</section>

</body>


