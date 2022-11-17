
<?php require_once 'admin/cruds/other_cruds/dbconnection.php';  ?>
          
<?php include('header.php'); ?>

<body style="background: rgba(255,255,212,.4); background-size: cover;">
    <div style="background: rgba(212,85,255,.6); color: white;">  
        <h1>WELCOME TO OUR VOCATIONAL OFFICE</h1>
    </div>   
  <section>
    <div class="row">
      <?php          
          $select_stmt = $connection->prepare("SELECT * FROM vocation"); //sql select query
          $select_stmt->execute();
          while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
          {
          ?>
            <div class="col-2">                
              <img src="admin/cruds/other_cruds/upload/<?php echo $row['vd_image']; ?>" style="height: 200px; width: 100%;  border-left-color: blue; border-right-color: blue; border-top-color: blue; border-bottom-color: red; border-style: solid;">
                <h4 style="background-color: rgba(200,200,15,.2);"><?php echo $row['vd_name']; ?></h4>
            </div>

            <div class="col-6" style="text-align: justify;">          
              <div style="margin-left: 10px;  margin-right: 15px; text-align: justify; letter-spacing: .5px; line-height: 17px; overflow-y: scroll; overflow-x: scroll;">
                <h2 style="text-transform: uppercase;"><?php echo $row['title']; ?></h2>
                <h4 style="text-align: justify; margin-left: 10px;  margin-right: 15px;"><?php echo $row['message']; ?></h4>                   
              </div>
            </div>

            <div class="col-4">             
              <div class="card" style="background-color: rgba(12,206,10,.2);">
                    <h3><strong style="margin-left: 20%;">Become a candidate</strong></h3>                
                  <div class="col-6">
                    <a href="messaging/candidate_registration.php"><img src="assets/images/form1.png" style="height:250px; width: 250px; border-radius: 50%; text-align: center; margin-left: 45%;"></a>
                  </div> 
              </div>
            </div>  
              
            </div>                          

      <?php
          }          
          ?>
    </section>


<?php   include('footer.php'); ?>
<?php   include('modals/modal_about_us.php'); ?>
<?php   include('modals/modal_apostolate.php'); ?>
<?php   include('modals/formation.php'); ?>   