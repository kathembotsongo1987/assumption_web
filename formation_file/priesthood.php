
<?php   include('header2.php'); ?>
    
    
    <body>
    
        <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="../assets/images2/kuhani.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Becoming a priest is very</h6>
                <h2>easy with your <em>determination</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Do you want to? Yes.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

<section style="background-color: rgba(46,46,46,.2);">
    <div>
        <h1 style="color: blue;">Current Priests in the Vice Province of East-Africa</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
          require_once '../admin/crudFile/dbconnection.php'; 
          $select_stmt = $connection->prepare("SELECT * FROM priests"); //sql select query
          $select_stmt->execute();
          while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
          {
         ?>

        <div class="col-4">
          <div class="card" style="width: 100%;">
            <img src="../admin/crudFile/upload/<?php echo $row['image']; ?>" style="height:300px; width: 50%; margin-left: 25%; border-radius: 50%;">
            <h4><?php echo $row['name']; ?></h4>
            <h5 style="color: blue;"><?php echo substr($row['description'], 0,70) ?></h5>
            <button class="btn-primary w-30>" <a href="#">Read more</a></button>
        
          </div>
        </div>
    
        <?php 

          }
          
          ?>
    </div>
</section>

<!-- pagination -->

https://www.codingcage.com/2015/04/how-to-create-pagination-with-php-pdo.html? 

    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
 

  </body>



<?php   include('js.php'); ?>
<?php   include('../footer.php'); ?>
<?php   include('../modals/modal_about_us.php'); ?>
<?php   include('../modals/modal_apostolate.php'); ?>
<?php   include('../modals/formation2.php'); ?>