

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- Favicon -->
  <link href="assets/images/logo_AR.ico" rel="icon">  
  <!-- CSS Link with HTML-->
  <link rel="stylesheet" href="assets/css/style.css">    
  <link rel="stylesheet" href="assets/css/bootstrap/css/style.css">
  <link rel="stylesheet" href="assets/css/mdb.min.css" />   
  

	
        <title>AssumptionistFathers||East Africa</title>        
	     
	</head>
   
    <header> 
		<!-- Top Bar Start -->
        <div class="top-bar">           
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                              <a title="8:00 am - 9:00 pm" href="#" style="display: flex; text-decoration: none;"> <i class="far fa-clock"></i><h2 class="g-none">8:00 am - 9:00 pm</h2></a>
                                <p class="g-none">Opening Hour Monday - Saturday</p>
                            </div>
                            <div class="text">
                               <a title="+254706571995" href="tel:+2540706571995" style="display: flex; text-decoration: none;"> <i class="fas fa-phone"></i> <h2 class="g-none">+254706571995</h2></a> 
                                <p class="g-none">Call Us for apostolic Reasons</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a  title="Twitter" href=""><i class="fab fa-twitter"></i></a>
                                <a  title="Watsapp" href="https://api.whatsapp.com/send?phone=+254706571995here! I have a question :)"><i class="fab fa-whatsapp"></i></a>
                                <a title="Facebook" href="https://www.facebook.com/Augustinians-of-Assumption-East-Africa-356738085100336?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a title="Instagram" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>


        <!-- end style top bar -->

       
         <!-- Nav Bar Start -->
         <div class="navbar navbar-expand-lg bg-dark navbar-dark">          
              <a href="index.php" class="navbar-brand"><span class="logo"><img class="logo" src="assets/images/logo_AR.ico" rel="icon"></span><span>Assumptionists</span></a>
              
              <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                  <ul class="navbar-nav">
                      <li><a href="index.php" class="nav-link active">Home</a></li>
                      <li><a href="#" data-bs-toggle="modal" data-bs-target="#AboutModal" class="nav-item nav-link">About</a></li>
                      <li><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#ApostolateModal" class="nav-item nav-link active" >Apostolates</a></li>
                      <li><a href="vocation.php" class="nav-item nav-link">Vocation_Office</a></li>
                      <li><a href="contact.php" class="nav-item nav-link" >Contacts</a></li>

                    <div class="dropdown">
                      <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">
                        Support-Mission
                      </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Vocation">Vocation</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Formation">Formation</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Parishes">Parishes</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Shrines">Shrines</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#SocialWork">Social work</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#OtherProjects">Other Projects</a></li>
                        </ul> 
                      </div>
                      <div class="dropdown">
                      <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">
                        Login
                      </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
                          <li><a class="dropdown-item" href="login.php">Admin</a></li>
                          <li><a class="dropdown-item" href="login_religious.php" >Religious</a></li>                          
                        </ul> 
                      </div>
                  </ul>
              </div>
          </div>    

    </header> <!---End Header-->


<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>
  


    <!-- selector country links bootstrap -->
  <script src='https://kit.fontawesome.com/a076d05399.js' ></script>
  <?php   include('modals/modal_donation.php'); ?>
  <?php   include('modals/modal_login.php'); ?>
    

    

