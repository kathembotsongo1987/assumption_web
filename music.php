<?php include('header.php'); ?>


<body style="background-image: url('bgmusic.jpeg');">
  <div style="background-color: rgba(255,255,255,.6); color:blue; text-transform: uppercase; text-align: center;" >
    <h1>Beautiful Singing, Nice Evangelization</h1>
  </div>
    <div class="row" style="width:30%; margin-left: 36%;">	
      <?php
        require_once 'admin/crudFile/dbconnection.php'; 
        $select_stmt = $connection->prepare("SELECT * FROM music_text1"); //sql select query
        $select_stmt->execute();
        while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
        {
        ?>             
            <div class="col" style="text-align: justify; text-align: justify; color: black; background-color: rgba(150,212,150,.4); border-radius: 10px; border-left: solid; border-right: solid; color: blue;">          
                  <h3><?php echo $row['text1']; ?></h3>
            </div>
    </div>
          <?php
          }          
          ?>
            <div class="row" style="background:rgba(15,255,15,.4); border-radius: 10px;">         	
         	    <h1 style="text-transform: uppercase; text-align: center;">beautiful singing, beautiful evangelization</h1>
          	    <?php
                  require_once 'admin/crudFile/dbconnection.php'; 
                  $select_stmt = $connection->prepare("SELECT * FROM music"); //sql select query
                  $select_stmt->execute();
                  while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                  {
                  ?>                             
                  <div class="col-4 card">	
                    <h3  style="text-align: center; background-color: rgba(200,200,150,.6); color: blue;"><?php echo $row['artist']; ?></h3>                
                      <iframe style="width: 100%; height: 400px;" src="<?php echo $row['video']; ?>"></iframe>
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