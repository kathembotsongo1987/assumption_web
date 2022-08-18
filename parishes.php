

<?php   
  include('header.php');
  require 'admin/cruds/other_cruds/dbconnection.php';
 ?>

<body style="background: rgba(255,255,212,.4); background-size: cover;">
	<div style="background: rgba(212,85,255,.6); color: white; text-transform: uppercase;"> 
    <h1>Parishes in the Vice Province of Easter Africa</h1>
  </div>
    <div class="row" style="height: 70%">
      <?php
        $select_stmt = $connection->prepare("SELECT * FROM parishes"); //sql select query
        $select_stmt->execute();               
        while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
        {
        ?>
        <div class="col-2">
            <img src="admin/cruds/other_cruds/upload/<?php echo $row['building']; ?>" style="height: 200px; width: 262px;">
            <h3 style="background-color: blue; color: white;text-align: center;">Parish Building</h3>
            <img src="admin/cruds/other_cruds/upload/<?php echo $row['parish_priest']; ?>" style="height: 200px; width: 262px;">
            <h3 style="background-color: blue; color: white; text-align: center; ">Parish Pries</h3>              
        </div>
          <div class="col-6" style="text-align: justify; background-color:#A5A5A5;">       
            <div style="margin-left: 10px;  margin-right: 10px; text-align: justify; letter-spacing: .5px; line-height: 17px; overflow-y: scroll; overflow-x: scroll; height: 480px;">
              <h2 style="text-transform: uppercase; margin-right: 20px; color: white; text-align: center;"><?php echo $row['parish_name']; ?></h2>
              <h4 style="text-align: justify; margin-right: 20px; color: white;"><?php echo $row['parish_description']; ?></h4>
              <h2 style="text-transform: uppercase; margin-right: 20px; color: white; text-align: center;"><?php echo $row['articletitle']; ?></h2>
              <h4 style="text-align: justify; margin-right: 20px; color: white;"><?php echo $row['articledescription']; ?></h4>
            </div>
              </div>
                <div class="col-2">                
                  <img src="admin/cruds/other_cruds/upload/<?php echo $row['parish_church_council'];?>"  style="border-radius: 10px; border-style: double; border-width: 10px; height: 200px; width: 268px;">
                  <h3 style="background-color: blue; color: white;text-align: center;">Church Council</h3>
                  <iframe src="<?php echo $row['video']; ?>"  style="border-radius: 10px; border-style: double; border-width: 10px; height: 200px; width: 268px;">></iframe>
                  <h3 style="background-color: blue; color: white;text-align: center;">Parish choir</h3>          
                </div>  
                <div class="col-2">                
                  <img src="admin/cruds/other_cruds/upload/<?php echo $row['christians'];?>"  style="border-radius: 10px; border-style: double; border-width: 10px; height: 200px; width: 268px;">
                  <h3 style="background-color: blue; color: white;text-align: center;">Christians</h3>
                  <div class="card" style="height: 200px; width: 268px;">
                    <br>
                      <h5 style="text-transform: uppercase; color: blue;text-align: center;"><?php echo $row['contact1']; ?></h5> <br>
                      <h5 style="text-transform: uppercase; color: blue;text-align: center;"><?php echo $row['contact2']; ?></h5><hr>
                      <h5 style="text-transform: uppercase; color: blue;text-align: center;"><?php echo $row['email']; ?></h5>                  
                  </div>
                  <h3 style="background-color: blue; color: white;text-align: center;">Parish Contacts</h3>      
                </div>     
            <?php
            }          
            ?> 
<?php   include('footer.php'); ?>
<?php   include('modals/modal_about_us.php'); ?>
<?php   include('modals/modal_apostolate.php'); ?>
<?php   include('modals/formation.php'); ?>