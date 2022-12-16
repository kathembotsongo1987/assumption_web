
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <h1 style="background-color: rgba(15,15,15,.2);">Formation Cycle</h1>
      </div>  
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2);width:70%; height: 300px;">
      <h2 class="card-title">In Noviciate</h2>
      <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
      <a href="novices_view.php" style="text-decoration: none;">
        <div class="card-body bg-primary" style="width:70%;height:150px">        
        <div style="color: white; font-size: 70px;">
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where status='noviciate'");
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
        <a href="novices_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
      <h2 class="card-title">In Philosophy</h2>
      <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
      <a href="philosophers_view.php" style="text-decoration: none;">
      <div class="card-body bg-warning"  style="width:70%;height:150px">        
        <div style="color: white; font-size: 70px;"> 
       <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where status='philosophy'");
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
        <a href="philosophers_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
       <h2 class="card-title">In Pastoral</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
       <a href="pastoral_view.php" style="text-decoration: none;">
      <div class="card-body bg-success" style="width:70%;height:150px">
        <div style="color: white; font-size: 70px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where status='pastoral'");
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
        <a href="pastoral_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
       <h2 class="card-title">Theology</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
       <a href="theologians_view.php" style="text-decoration: none;">
      <div class="card-body" style="width:70%;height:150px; background-color: rgba(115,210,205,.2); border-bottom-right-radius: 50px;">
        <div style="color: white; font-size: 70px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where status='theology'");
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
        <a href="theologians_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div> 
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
       <h2 class="card-title">In Diaconate</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
       <a href="deacons_view.php" style="text-decoration: none;">
      <div class="card-body bg-secondary" style="width:70%;height:150px; border-top-right-radius: 50px;">
        <div style="color: white; font-size: 70px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where status='diaconate'");
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
        <a href="deacons_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div> 
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
       <h2 class="card-title">Priests</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
       <a href="priests_view.php" style="text-decoration: none;">
      <div class="card-body" style="width:70%;height:150px; background-color: rgba(175,20,35,.2); border-bottom-left-radius: 50px;">
        <div style="color: white; font-size: 70px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where status='priesthood'");
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
        <a href="priests_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
       <h2 class="card-title">Temporary vows</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
       <a href="temporary_vows_view.php" style="text-decoration: none;">
      <div class="card-body" style="width:70%;height:150px; background-color: rgba(145,150,17,.2); border-top-left-radius: 50px;">
        <div style="color: white; font-size: 70px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where temp_v_date!='null' AND perp_v_date='null'");
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
        <a href="temporary_vows_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div> 
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
       <h2 class="card-title">Perpetual vows</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
       <a href="perpetual_vows_view.php" style="text-decoration: none;">
      <div class="card-body" style="width:70%;height:150px;background-color: rgba(5,150,17,.2); border-bottom-right-radius: 50px;">
        <div style="color: white; font-size: 70px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM religious_tb where perp_v_date!='null'");
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
        <a href="perpetual_vows_view.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div> 
  <div class="col-4">
    <div class="card" style="background-color: rgba(205,205,10,.2); width:70%; height: 300px;">
       <h2 class="card-title">On Mission</h2>
        <h3 class="card-title" style="background-color: rgba(200,12,150,.2);">Number</h3>
       <a href="mission.php" style="text-decoration: none;">
      <div class="card-body" style="width:70%;height:150px;background-color: rgba(235,150,17,.2); border-top-right-radius: 50px;">
        <div style="color: white; font-size: 70px;"> 
        <?php
          require 'data_count.php';
          $query=$connection->query("SELECT * FROM mission");
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
        <a href="mission.php" style="text-decoration: none;"><h3>View Names</h3></a>
      </div>
    </div>
  </div>  
</div>
</center>
    </container>

</section>

</body>


