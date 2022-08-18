
<?php   
include('header.php');
require 'admin/cruds/other_cruds/dbconnection.php';
 ?>

    <body>
      <div><h1 style=" background-color: rgba(100,150,100,.5); text-align: center; text-transform: uppercase;"> Good Education, Good Future. Good School, Higher Opportunity for Jobs</h1></div>                
          <div class="row" style="color: white;">
            <?php               
               $select_stmt = $connection->prepare("SELECT * FROM schools"); //sql select query
               $select_stmt->execute();
               while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
              {
               ?>

              <div class="col-2">
                <img src="admin/cruds/other_cruds/upload/<?php echo $row['art_image']; ?>" style="height: 200px; width: 262px;">
                <h3 style="background-color: blue; color: white;text-align: center;">School Building</h3>
                <img src="admin/cruds/other_cruds/upload/<?php echo $row['art_image']; ?>" style="height: 200px; width: 262px;">
                <h3 style="background-color: blue; color: white; text-align: center; ">Head-teacher</h3>              
              </div>
              <div class="col-6" style="text-align: justify; background-color:#A5A5A5;">       
                  <div style="margin-left: 10px;  margin-right: 10px; text-align: justify; letter-spacing: .5px; line-height: 17px; overflow-y: scroll; overflow-x: scroll; height: 480px;">
                    <h2 style="text-transform: uppercase; margin-right: 20px; color: white; text-align: center;"><?php echo $row['school_name']; ?></h2>
                    <h4 style="text-align: justify; margin-right: 20px; color: white;"><?php echo $row['school_description']; ?></h4>
                    <h2 style="text-transform: uppercase; margin-right: 20px; color: white; text-align: center;"><?php echo $row['articletitle']; ?></h2>
                    <h4 style="text-align: justify; margin-right: 20px; color: white;"><?php echo $row['articledescription']; ?></h4>
                  </div>
              </div>
              <div class="col-2">                
                  <img src="admin/cruds/other_cruds/upload/<?php echo $row['school_chaplain'];?>"  style="border-radius: 10px; border-style: double; border-width: 10px; height: 200px; width: 268px;">
                  <h3 style="background-color: blue; color: white;text-align: center;">Chaplain</h3>
                  <iframe src="<?php echo $row['video']; ?>"  style="border-radius: 10px; border-style: double; border-width: 10px; height: 200px; width: 268px;">></iframe>
                  <h3 style="background-color: blue; color: white;text-align: center;">school demo</h3>          
              </div>  
              <div class="col-2">                
                  <img src="admin/cruds/other_cruds/upload/<?php echo $row['school_teachers'];?>"  style="border-radius: 10px; border-style: double; border-width: 10px; height: 200px; width: 268px;">
                  <h3 style="background-color: blue; color: white;text-align: center;">Students</h3>
                  <div class="card" style="height: 200px; width: 268px;">
                    <br>
                      <h5 style="text-transform: uppercase; color: blue;text-align: center;"><?php echo $row['contact1']; ?></h5> <br>
                      <h5 style="text-transform: uppercase; color: blue;text-align: center;"><?php echo $row['contact2']; ?></h5><hr>
                      <h5 style="text-transform: uppercase; color: blue;text-align: center;"><?php echo $row['email']; ?></h5>                  
                  </div>
                  <h3 style="background-color: blue; color: white;text-align: center;">School Contacts</h3>      
              </div>     
        <?php
          }          
          ?> 
    </body>
<?php   include('footer.php'); ?>
<?php   include('modals/modal_about_us.php'); ?>
<?php   include('modals/modal_apostolate.php'); ?>
<?php   include('modals/formation.php'); ?>