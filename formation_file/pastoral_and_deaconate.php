

<?php require'header2.php'; ?>

	<div class="row">		
		

<?php
          require_once '../admin/crudFile/dbconnection.php'; 
          $select_stmt = $connection->prepare("SELECT * FROM pastoral_message"); //sql select query
          $select_stmt->execute();
          while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
          {
         ?>

        <div class="col-4">
           <img style="width: 100%; height: 70%" src="../admin/crudFile/uploadformation/<?php echo $row['photo1']; ?>">
            <h4 style="color: blue;"><?php echo $row['description1']; ?></h4>              
        </div>

        <div class="col-4">
        	<iframe style="width: 100%; height: 70%"  src="<?php echo $row['video']; ?>"></iframe>
            <h4 style="color: blue;"><?php echo substr($row['descriptionvideo'], 0,70) ?></h4>
        </div>

		<div class="col-4">
        	<img style="width: 100%; height: 70%" src="../admin/crudFile/uploadformation/<?php echo $row['photo2']; ?>">
            <h4 style="color: blue;"><?php echo $row['description2']; ?></h4>       
        </div>    
        <?php 

          }
          
          ?>
	</div>

	
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
                         require_once '../admin/crudFile/dbconnection.php'; 
         				 $select_stmt = $connection->prepare("SELECT * FROM pastoral limit 3 "); //sql select query
         				 $select_stmt->execute();
         				 while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                        {
                        ?>
                          <div class="col-4">
                                          <div class="card" style="background-color: rgba(12,206,10,.2);">
                                            <div class="row"> 
                                              <div class="col-6">
                                                  <img src="../admin/crudFile/uploadformation/<?php echo $row['image']; ?>" style="height:315px; width: 250px;">
                                              </div>
                                              <div class="col-6" style="color: black; margin-top: 5px;">
                                              	<span style="color: black;">Name:</span>
                                                  <h4><?php echo $row['name']; ?></h4>
                                                
                                                 <span style="color: black;">Country:</span>
                                                  <h4><?php echo $row['country']; ?></h4>
                                              
                                                 <span style="color: black;">Diocese:</span>
                                                  <h4><?php echo $row['diocese']; ?></h4>
                                              
                                                 <span style="color: black;">Parish:</span>
                                                  <h4><?php echo $row['parish']; ?></h4>
                                              
                                                 <span style="color: black;">Place of Work:</span>
                                                  <h4><?php echo $row['place_of_work']; ?></h4>
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
                                        require_once '../admin/crudFile/dbconnection.php'; 
         				 					$select_stmt = $connection->prepare("SELECT * FROM pastoral limit 3,5 "); //sql select query
         				 					$select_stmt->execute();
         				 					while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                                          {
                                          ?>

                                        <div class="col-4">
                                          <div class="card" style="background-color: rgba(255,206,255,.2);">
                                            <div class="row"> 
                                              <div class="col-6">
                                                  <img src="../admin/crudFile/uploadformation/<?php echo $row['image']; ?>" style="height:315px; width: 250px;">
                                              </div>
                                               <div class="col-6" style="color: black; margin-top: 5px;">
                                               <span style="color: black;">Name:</span>                                             
                                                  <h4><?php echo $row['name']; ?></h4>
                                                 <span style="color: black;">Country:</span> 
                                                   <h4><?php echo $row['country']; ?></h4>
                                                   <span style="color: black;">Diocese:</span> 
                                               
                                                  <h4><?php echo $row['diocese']; ?></h4>
                                                  <span style="color: black;">Parish:</span> 
                                                  
                                                  <h4><?php echo $row['parish']; ?></h4>
                                                  <span style="color: black;">Place of Work:</span> 
                                               
                                                  <h4><?php echo $row['place_of_work']; ?></h4>
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
           

<?php   include('js.php'); ?>
<?php   include('../footer.php'); ?>
<?php   include('../modals/modal_about_us.php'); ?>
<?php   include('../modals/modal_apostolate.php'); ?>
<?php   include('../modals/formation2.php'); ?>



	

