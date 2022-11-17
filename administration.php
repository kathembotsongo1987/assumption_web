


<?php include('header.php');?>
<body>
  <div style="background: rgba(212,212,255,.3); color: black; text-align: center;"><h1>PROVINCIAL COUNCIL</h1> </div>
    <div class="row">
           
        <?php
            require_once 'admin/cruds/other_cruds/dbconnection.php'; 
            $select_stmt = $connection->prepare("SELECT * FROM provincial_council"); //sql select query
            $select_stmt->execute();
            while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
            {
             ?>

                <div style="text-align: center;" class=" card col" style="text-align: justify;">
                    <img style=" height:250px; width: 250px; border-radius: 50%;" src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>">
                      <h2><?php echo $row['name']; ?></h2>
                      <h3><?php echo $row['title']; ?></h3>
                      <span><i class="fas fa-phone"></i> &nbsp; <h4><?php echo $row['phone']; ?></h4></span>
                      <span><i class="fas fa-envelope"><h4><?php echo $row['email']; ?></h4></i></span>
                          <br>  <hr>  
                </div>
   
    
        <?php 

             }
          
             ?>
  
                  <div class=" card col-4">
                     <?php   include('calendar.php'); ?>
                  </div>
                </div>

                 
          

              <div style="background: rgba(212,212,255,.3); color: black; text-align: center;""> 
                <h1>GENERAL COUNCIL</h1>
              </div>           
              <div class="row">
                  <?php
                      require_once 'admin/cruds/other_cruds/dbconnection.php'; 
                         $select_stmt = $connection->prepare("SELECT * FROM general_council"); //sql select query
                         $select_stmt->execute();
                         while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                         {
                         ?>
                        <div class="col-6">
                          <div style="text-align: center;" class=" card col" style="text-align: justify;">
                            <div class="row">
                                <div class="col-4"> 
                                  <img src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>" style="width:70%; height:80%; margin:0px;">
                                </div>
                                <div class="col-8">   
                                      <h2 style="text-align: center; color: blue;"><?php echo $row['title']; ?></h2>
                                      <h4 style="text-align: justify;"><?php echo $row['description']; ?></h4>
                                </div>
                            </div>
                          </div>
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
