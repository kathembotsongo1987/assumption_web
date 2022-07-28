

<?php 	
include('header.php');
require 'admin/cruds/other_cruds/dbconnection.php';
 ?>

   <div>   
    <div class="row">    
        <div>                  
            <?php
                  $select_stmt = $connection->prepare("SELECT * FROM slides_orders"); //sql select query
                  $select_stmt->execute();
                  while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                  {
                  ?>

                   <video width="100%"playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="ordination.mp4" type="video/mp4"></video>
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(15,15,15,.4); width: 50%; margin-left: 10%;">
                      <a href="#" style="text-decoration: none;">
                        <h5 class="text-white text-uppercase mb-md-3"><?php echo $row['title']; ?></h5>
                        <h1 class="display-3 text-white mb-md-4"><?php echo $row['smalltext']; ?></h1>
                      </a>
                    </div>
                <?php 
                }
                ?>
        </div>

        

        <div class="container">
          <div class="row">
            <?php      
              $select_stmt = $connection->prepare("SELECT * FROM orders"); //sql select query
              $select_stmt->execute();
              while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
            {
            ?>
            <div class="col-6">
              <div class="row">  
                <div class="col">
                  <div class="card" style="width: 400px;">
                    <img style="height: 300px;" src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>">
                      <div class="card-body">
                        <h3 style="color: blue;"><?php echo $row['name']; ?></h3> 
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><h5>Country of Origine:<?php echo $row['country']; ?></h5></li>
                      <li class="list-group-item"><h5>Current Community:<?php echo $row['community']; ?></h5></li>
                      <li class="list-group-item"><h5>Date for First Vows: <?php echo $row['temp_v_date']; ?></h5></li>
                      <li class="list-group-item"><h5>Date for Perpetual Vows: <?php echo $row['perp_v_date']; ?></h5></li>
                      <li class="list-group-item"><h5>Date for Diconate: <?php echo $row['deaconate_date']; ?></h5></li>
                      <li class="list-group-item"><h5>Date for Pristhood: <?php echo $row['priesthood_date']; ?></h5></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
                  <div class="card"  style="background-color: #D2D2D2; text-align: justify;">
                      <div class="card-header">
                       <h3 style="color: blue; text-align: center;"><?php echo $row['name']; ?></h3> 
                      </div>
                      <div class="card-body">
                        <h4><?php echo $row['message']; ?></h4> 
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
            

   


<?php   include('footer.php'); ?>
<?php   include('modals.php'); ?>

