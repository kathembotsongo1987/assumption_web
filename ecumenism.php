
<?php   
include('header.php');
require 'admin/cruds/other_cruds/dbconnection.php';
 ?>

       
<body>
  <div class="row">    
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-indicators">        
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
              
          </div>
          <div class="carousel-inner w-100" >
            <div class="carousel-item active">
                <img src="assets/images/photo3.jpg" class="d-block w-100"  alt="...">                 
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px; background-color: rgba(15,15,15,.4);"><a href="#" style="text-decoration: none;">
                            <h5 class="text-white text-uppercase mb-md-3">Title of the Carousel</h5>
                            <h1 class="display-3 text-white mb-md-4">Summary about the Carousel</h1>
                          </a>
                        </div>
                    </div>
            </div>
            
            <?php                

                  $select_stmt = $connection->prepare("SELECT * FROM slidesecumenism"); //sql select query
                  $select_stmt->execute();
                  while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                  {
                  ?>

            <div class="carousel-item">
                <img src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>" class="d-block" alt="..." >
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(15,15,15,.4); width: 50%; margin-left: 10%;">
                      <a href="#" style="text-decoration: none;">
                        <h5 class="text-white text-uppercase mb-md-3"><?php echo $row['title']; ?></h5>
                        <h1 class="display-3 text-white mb-md-4"><?php echo $row['smalltext']; ?></h1>
                      </a>
                    </div>
            </div>

               <?php 
                }
                ?>
        </div>

        <div>
               
        </div>

        <div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

    </div>
</div>

<div style="background-color: rgba(170,150,250,.5); text-transform: uppercase; text-align: center;"> 
    <h1>DIFFERENT CHURCHES BUT ONE GOD</h1>
</div>

  <div class="row">    
   <?php
              
               $select_stmt = $connection->prepare("SELECT * FROM ecumenism"); //sql select query
               $select_stmt->execute();
               while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
              {
               ?>

              <div class="col-3">
                <img src="admin/cruds/other_cruds/upload/<?php echo $row['ecumenism_image']; ?>" style="width: 405px; height: 400px; border-left-color: blue; border-right-color: blue; border-top-color: blue; border-bottom-color: red; border-style: solid;">
                <h3 style="background-color: red; color: white; text-align: center;">Word about the picture</h3>                              
              </div>

              <div class="col-6" style="text-align: justify;">          
                  <div style="margin-left: 10px;  margin-right: 10px; text-align: justify; letter-spacing: .5px; line-height: 17px; overflow-y: scroll; overflow-x: scroll; height: 480px;">

                    <h2 style="text-transform: uppercase; margin-right: 10px; text-align: center;"><?php echo $row['intro_title']; ?></h2>
                    <h4 style="text-align: justify; margin-right: 10px;"><?php echo $row['intro_description']; ?></h4>
                    <h2 style="text-transform: uppercase; margin-right: 10px; text-align: center;"><?php echo $row['articletitle']; ?></h2>
                    <h4 style="text-align: justify; margin-right: 10px;"><?php echo $row['articledescription']; ?></h4>
                  </div>
              </div>
              <div class="col-3">                
                  <iframe src="<?php echo $row['video']; ?>"  style="width: 100%; height: 100%;">></iframe>                                    
              </div>  
              
          <?php
              }          
             ?>
  </div>

</body>


<?php   include('footer.php'); ?>
<?php   include('modals/modal_about_us.php'); ?>
<?php   include('modals/modal_apostolate.php'); ?>
<?php   include('modals/formation.php'); ?>