
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
    </head>
    <body>
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

<body>  
<section style="margin-left: 15%;"> 
    <center>
        <div class="row row-cols-1">
    
            <div class="col-5">
                <a href="events_user.php">
                  <div class="card" style="width:50%; height:80%;"> 
                    <img src="../../../assets/images/upcoming-events.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Events</h5>
                        </div>
                  </div>
                </a>
            </div>
                         
            <div class="col-5">
                <a href="documents_religious.php">
                <div class="card" style="width:50%;">
                    <img src="../../../assets/images/documents.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Documents</h5>
                        </div>
                </div>
                  </a>
            </div>
                <a href="religiouschatbox/login.php">                            
                    <div class="card-body">
                        <img src="../../../assets/images/whatsapp.png" class="card-img-top" style=" background-color: rgba(25,125,15,.1); width: 15%; margin-right: 15%; padding: 20px;" alt="...">
                    </div>
                </a>
                
            
            <div class="col-5">
                <a href="cties.php">
                <div class="card" style="width:50%; height:60%;">
                    <img src="../../../assets/images/communities.jpg" class="card-img-top" height="350" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Commmunitites</h5>
                        </div>
                </div>
                </a>
            </div>
            
            
            <div class="col-5">
                <a href="formation_cycle.php">
                <div class="card" style="width:50%;">
                    <img src="../../../assets/images/religious.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Formation Cycle</h5>
                        </div>
                </div>
            </div>
            </a>
        </div>
    </center>

</section>

</body>


