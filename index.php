

<?php 	
include('header.php');
require 'admin/cruds/other_cruds/dbconnection.php';
 ?>

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

                  $select_stmt = $connection->prepare("SELECT * FROM slideshome"); //sql select query
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

<section class="home_charism" style=""> 
    <div class="charism_container"> 
        <div class="charism_title_par">
          <h1>OUR CHARISM IS SUMMARIZED INTO THE TRIPPLE LOVE</h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. 
            </p>
        </div>
        <div class="container p-3">
          <div class="row">
        <?php
          include('admin/cruds/other_cruds/dbconnection.php');
                         
          $select_stmt = $connection->prepare("SELECT * FROM triplelove"); //sql select query
          $select_stmt->execute();
          while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
          {
         ?>

        <div class="col-4">
          <div class="card" style="width: 100%;">
            <img src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>" style="height:300px;">
            <h4><?php echo $row['title']; ?></h4>
            <h5 style="color: blue;"><?php echo substr($row['description'], 0,70) ?></h5>
            <button class="btn-primary w-30>" <a href="#">Read more</a></button>
        
          </div>
        </div>
    
        <?php 

          }
          
          ?>
          </div>
        </div>
    </div>
</section>

  

    <div class="row">
       <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
              <li data-bs-target="#blogCarousel" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#blogCarousel" data-bs-slide-to="1"></li>
          </ol>
              <div class="carousel-inner ">
                <div class="carousel-item active">
                  <div class="row">
                    <?php
                        require_once 'admin/cruds/other_cruds/dbconnection.php'; 
                        $select_stmt = $connection->prepare("SELECT * FROM rule limit 3"); //sql select query
                        $select_stmt->execute();
                        while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                        {
                        ?>
                          <div class="col-4">
                                          <div class="card" style="background-color: rgba(12,206,10,.2);">
                                            <div class="row"> 
                                              <div class="col-6">
                                                  <img src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>" style="height:250px; width: 250px; border-radius: 50%;">
                                              </div>
                                              <div class="col-6">
                                                  <h4><?php echo $row['title']; ?></h4>
                                                  <h5 style="color: blue;"><?php echo substr($row['description'], 0,70) ?></h5>
                                                  <button class="btn-primary w-30 rule_button"><a href="#">Read more</a></button>
                                              </div>
                                            </div> 
                                          </div>
                                        </div>
  
                      <?php 
                          }
                          ?>
                        </div>
                        </div>
                      <div class="carousel-item">
                          <div class="row">
                                    <?php
                                            require_once 'admin/cruds/other_cruds/dbconnection.php'; 
                                             $select_stmt = $connection->prepare("SELECT * FROM rule limit 3,5 "); //sql select query
                                            $select_stmt->execute();
                                            while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                                          {
                                          ?>

                                        <div class="col-4">
                                          <div class="card" style="background-color: rgba(255,206,255,.2);">
                                            <div class="row"> 
                                              <div class="col-6">
                                                  <img src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>" style="height:250px; width: 250px; border-radius: 50%;">
                                              </div>
                                              <div class="col-6">
                                                  <h4><?php echo $row['title']; ?></h4>
                                                  <h5 style="color: blue;"><?php echo substr($row['description'], 0,70) ?></h5>
                                                  <button class="btn-primary w-30 rule_button"><a href="#">Read more</a></button>
                                              </div>
                                            </div> 
                                          </div>
                                        </div>

    
                                            <?php 

                                               }
          
                                               ?>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>

<?php   include('footer.php'); ?>
<?php   include('modals.php'); ?>

