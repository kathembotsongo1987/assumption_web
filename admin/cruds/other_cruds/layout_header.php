    <?php
        include 'dbconnection.php';
        session_start();
        $admin_id = $_SESSION['admin_id'];
        if(!isset($admin_id)){
        header('location:login.php');
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        

        <script src="../../js/js_font.js"></script>        
    </head>
	<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Administration</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <h3 style="color: white;">
                <?php
                    $select_profile = $connection->prepare("SELECT * FROM `religious_tb` WHERE id = ?");
                    $select_profile->execute([$admin_id]);
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>

            <img style="width: 100%; height: 50px; border-radius: 50%;" src="upload/<?= $fetch_profile['image']; ?>" alt="">
            <h3 style="color: white";><?= $fetch_profile['name']; ?></h3>
            <a style="color: blue;" href="../../../login/admin_profile_update.php" class="btn"><h4>update profile</h4></a>
            </h3>
            
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>                          
                <a class="nav-link" id="" href="../../../login/logout.php"href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>              
            </ul>
        </nav>
        
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#HomeCollapse" aria-expanded="false" aria-controls="HomeCollapse">
                                        Home data
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="HomeCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="read_slides_home.php">Slides carousel</a>
                                            <a class="nav-link" href="read_triplelove.php">Triple love</a>
                                            <a class="nav-link" href="read_rule.php">Rule of Life</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#AboutCollapse" aria-expanded="false" aria-controls="AboutCollapse">
                                        About us
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="AboutCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">                                            
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#AdminCollapse" aria-expanded="false" aria-controls="AdminCollapse"> Our Administration
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                                <div class="collapse" id="AdminCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPage">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="read_gen_council.php">General Council</a>
                                                        <a class="nav-link" href="read_prov_council.php">Provincial Council</a>
                                                        <a class="nav-link" href="read_prov_calendar.php">Provincial Calendar</a>
                                                    </nav>
                                                </div> 
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#LocationCollapse" aria-expanded="false" aria-controls="LocationCollapse"> Location
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                                <div class="collapse" id="LocationCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPage">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="read_africa_location.php">Africa</a>
                                                        <a class="nav-link" href="read_america_location.php">America </a>
                                                        <a class="nav-link" href="read_asia_location.php">Asia </a>
                                                        <a class="nav-link" href="read_europ_location.php">Europ</a>
                                                        <a class="nav-link" href="read_oceanic_location.php">Oceanic</a>
                                                    </nav>
                                                </div> 
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#StatisticCollapse" aria-expanded="false" aria-controls="StatisticCollapse"> Statistics
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                                <div class="collapse" id="StatisticCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPage">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="read_novices.php">Novices</a>
                                                        <a class="nav-link" href="read_temporary_vows.php">Temporary Professed </a>
                                                        <a class="nav-link" href="read_perpetual_vows.php">Perpetually Professed</a>
                                                        <a class="nav-link" href="read_europ_location.php">Deacons</a>
                                                        <a class="nav-link" href="read_orders.php">Priests</a>
                                                        <a class="nav-link" href="read_orders.php">Communities</a>
                                                        <a class="nav-link" href="read_orders.php">Schools</a>
                                                        <a class="nav-link" href="read_orders.php">Parishes</a>
                                                        <a class="nav-link" href="read_orders.php">Shrines</a>
                                                    </nav>
                                                </div>                                         
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#formationCollapse" aria-expanded="false" aria-controls="StatisticCollapse">Formation
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                                <div class="collapse" id="formationCollapse" aria-labelledby="headingOne" data-bs-parent="#formationCollapse">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="read_postulancy.php">Postulancy</a>
                                                        <a class="nav-link" href="read_noviciate.php">Noviciate</a>
                                                        <a class="nav-link" href="read_philosophy.php">Philosophy</a>
                                                        <a class="nav-link" href="read_post_philosophy.php">Post Philosophy</a>
                                                        <a class="nav-link" href="read_theology.php">Theology</a>
                                                        <a class="nav-link" href="read_post_theology.php">Post Theology</a>
                                                        <a class="nav-link" href="read_orders.php">Priesthood</a>
                                                    </nav>
                                                </div>
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#layCollapse" aria-expanded="false" aria-controls="StatisticCollapse">Lay Assumptionists
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                                <div class="collapse" id="layCollapse" aria-labelledby="headingOne" data-bs-parent="#formationCollapse">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="read_slidelay.php">slides</a>
                                                        <a class="nav-link" href="read_lay_form.php">Form</a>
                                                        <a class="nav-link" href="read_lay_groups.php">News</a>
                                                    </nav>
                                                </div>
                                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#admCollapse" aria-expanded="false" aria-controls="StatisticCollapse">Administration
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                                <div class="collapse" id="admCollapse" aria-labelledby="headingOne" data-bs-parent="#formationCollapse">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="read_prov_council.php">Provincial Council</a>
                                                        <a class="nav-link" href="read_gen_council.php">General Council</a>
                                                    </nav>
                                                </div>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                            <a class="nav-link" href="read_prov_calendar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Events
                                <span style=" margin: 20px; color: blue; background-color: white; border-radius: 15%;"> 
                                  <?php
                                   require 'data_count.php';
                                    $query=$connection->query("SELECT * FROM events");
                                        if($query->rowCount()){
                                            ECHO $query->rowCount();
                                        }else{
                                            echo '0';
                                        }

                                  ?>
                                </span>
                            </a>
                            <a class="nav-link" href="read_candidate.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Candidates
                                <span style=" margin: 20px; color: blue; background-color: white; border-radius: 15%;"> 
                                  <?php
                                   require 'data_count.php';
                                    $query=$connection->query("SELECT * FROM religious_tb where role='candidate'");
                                        if($query->rowCount()){
                                            ECHO $query->rowCount();
                                        }else{
                                            echo '0';
                                        }

                                  ?>
                                </span>
                            </a>
                            <a class="nav-link" href="create_religious.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-person-praying"></i></div>
                                Religious
                                <span style=" margin: 20px; color: blue; background-color: white; border-radius: 15%;"> 
                                  <?php
                                   require 'data_count.php';
                                    $query=$connection->query("SELECT * FROM religious_tb");
                                        if($query->rowCount()){
                                            ECHO $query->rowCount();
                                        }else{
                                            echo '0';
                                        }

                                  ?>
                                </span>
                            </a>
                             <a class="nav-link" href="upload_documents.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Documents
                                <span style=" margin: 20px; color: blue; background-color: white; border-radius: 15%;"> 
                                  <?php
                                   require 'data_count.php';
                                    $query=$connection->query("SELECT * FROM upload");
                                        if($query->rowCount()){
                                            ECHO $query->rowCount();
                                        }else{
                                            echo '0';
                                        }

                                  ?>
                                </span>
                            </a>
                            <a class="nav-link" href="read_cties.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-person-praying"></i></div>
                                Communities
                                <span style=" margin: 20px; color: blue; background-color: white; border-radius: 15%;"> 
                                    <?php
                                        require 'data_count.php';
                                        $query=$connection->query("SELECT * FROM communities");
                                        if($query->rowCount()){
                                             ECHO $query->rowCount();
                                            }else{
                                                echo '0';
                                        }
                                    ?>
                                </span>
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#vipstateCollapse" aria-expanded="false" aria-controls="StatisticCollapse">Vice Provincial State
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                                <div class="collapse" id="vipstateCollapse" aria-labelledby="headingOne" data-bs-parent="#vipstateCollapse">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="read_novices.php">Noviciate</a>
                                        <a class="nav-link" href="read_philosophers.php">Philosophy</a>
                                        <a class="nav-link" href="read_pastoral.php">Pastoral</a>
                                        <a class="nav-link" href="read_theologians.php">Theology</a>
                                        <a class="nav-link" href="read_deacons.php">Diaconate</a>
                                        <a class="nav-link" href="read_priests.php">Priesthood</a>
                                        <a class="nav-link" href="read_missions.php">On Mission</a>
                                        <a class="nav-link" href="read_temporary_vows.php">Temporary professed</a>
                                        <a class="nav-link" href="read_perpetual_vows.php">Perpetually professe</a>
                                    </nav>
                                </div>
                        </div>
                    </div>
                  </nav>
            </div>
            <div id="layoutSidenav_content">

