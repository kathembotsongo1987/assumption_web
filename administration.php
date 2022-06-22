


<?php include('header.php');?>
<body>
  <div style="background: rgba(212,212,255,.3); color: black; text-align: center;"><h1>PROVINCIAL COUNCIL AND THE CALENDAR OF EVENTS</h1> </div>
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
                      <p><?php echo $row['description']; ?></p>        
                </div>
   
    
        <?php 

             }
          
             ?>
  
                  <div class=" card col-4">
                      <div style="text-align: center; text-align: justify;">
                        <table class="table">
                        <tr>
                             <th colspan="3" style="background: rgba(212,255,255); font-size: 25px; text-align: center;">ACTIVITY PLANNING</th>
                       </tr>
                       <tr style="background: rgba(255,212,212,.6)">
                            <th style="text-align: center;"><h3>Date</h3></th>
                            <th style="text-align: center;"><h3>Event</h3></th>
                            <th style="text-align: center;"><h3>Location</h3></th>
                       </tr>

                       <?php
                           require_once 'admin/cruds/other_cruds/dbconnection.php'; 
                           $select_stmt = $connection->prepare("SELECT * FROM prov_calendar"); //sql select query
                           $select_stmt->execute();
                           while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                           {
                           ?>
   
                            <tr style="background: rgba(255,255,170,.6);">
                                <td><h5 style="text-align: center;"><?php echo $row['Date_event']; ?></h5></td>
                                <td><h5 style="text-align: center;"><?php echo $row['Event_prepared']; ?></h5></td>
                                 <td><h5 style="text-align: center;"><?php echo $row['Location']; ?></h5></td>
                            </tr>       
                     
   
    
                       <?php 

                          }
          
                          ?>
                        </table>         
                    </div>
                  </div>
                </div>
          

              <div style="background: rgba(212,212,255,.3); color: black; text-align: center;""> 
                <h1>CHECK ALSO ABOUT OUR GENERAL COUNCIL</h1>
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
