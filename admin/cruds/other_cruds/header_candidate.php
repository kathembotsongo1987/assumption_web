
<?php 
include 'dbconnection.php'; 
 session_start();

$candidate_id = $_SESSION['candidate_id'];

if(!isset($candidate_id)){
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
    </head>
    <body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         <h3 style="color: white;">
                <?php
                    $select_profile = $connection->prepare("SELECT * FROM `religious_tb` WHERE id = ?");
                    $select_profile->execute([$candidate_id]);
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>

            <img style="width: 100%; height: 50px; border-radius: 50%;" src="upload/<?= $fetch_profile['image']; ?>" alt="">
            <h3 style="color: white";><?= $fetch_profile['name']; ?></h3>
            <a style="color: blue;" href="../../../login/candidate_profile_update.php" class="btn"><h4>update profile</h4></a>
        </h3>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>                          
                <a class="nav-link" id="" href="../../../login/logout.php"href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>              
            </ul>
    </nav>