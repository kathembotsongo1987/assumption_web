<?php  include('header.php'); ?>
<?php   require_once 'admin/cruds/other_cruds/dbconnection.php';  ?>

 
<body style="background-image: url(bgstatisti.jpg); background-size: cover;">  
 <section>
  <div class="row">
    <div class="col-5">
      <table class="table" >            
            <tr>
                <th colspan="3" style="text-align: center;"><h1>  LOCATION IN THE WORLD </h1></th>
            </tr>
            <tr>
                <th><h2>CONTINENT</h2></th>
                <th><h2>COUNTRY</h2></th>
                <th><h2>N/Cties</h2></th>
            </tr>
            <tr style="background: rgba(255,15,200,.6)">
               <td rowspan="20"> <h2>EUROPE</h2></td>
               
                <?php                    
                    $select_stmt = $connection->prepare("SELECT * FROM europ_location"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                     ?>
   
                <tr>
                     <td><h3><?php echo $row['country']; ?></h3></td>
                     <td><h3><?php echo $row['no_community']; ?></h3></td>
                </tr>  
            </tr>          
    
   
    
        <?php 

          }
          
          ?>

          </table>
          <table class="table">

        <tr style="background: rgba(105,155,155,.3)">
                      
            <td rowspan="20"><h2> AMERICA </h2> </td>
            <?php 
                    $select_stmt = $connection->prepare("SELECT * FROM america_location"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                     ?>
   
                <tr>
                     <td><h3><?php echo $row['country']; ?></h3></td>
                     <td><h3><?php echo $row['no_community']; ?></h3></td>
                </tr> 
        </tr>           
    
   
    
        <?php 

          }
          
          ?>
            
        </table>
        <table class="table">
         <tr style="background: rgba(255,255,255,.3)">
            <td rowspan="20"><h2> ASIA</h2></td>

                <?php 
                    $select_stmt = $connection->prepare("SELECT * FROM asia_location"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                     ?>
   
                <tr>
                     <td><h3><?php echo $row['country']; ?></h3></td>
                     <td><h3><?php echo $row['no_community']; ?></h3></td>
                </tr> 
        </tr>           
    
   
    
        <?php 

          }
          
          ?>
      </table>

        <table class="table">
        <tr style="background: rgba(200,15,255,.2)">
            <td rowspan="20"><h2>OCEANIC</h2></td>

                <?php 
                    $select_stmt = $connection->prepare("SELECT * FROM oceanic_location"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                {
                ?>
   
                <tr>
                     <td><h3><?php echo $row['country']; ?></h3></td>
                     <td><h3><?php echo $row['no_community']; ?></h3></td>
                </tr> 
        </tr>           
    
   
    
        <?php 

          }
          
          ?>

      </table>

      <table class="table">
         <tr style="background: rgba(155,255,255,.2)">
            <td rowspan="20"><h2> AFRICA </h2></td>

                <?php 
                    $select_stmt = $connection->prepare("SELECT * FROM africa_location"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                     ?>
   
                <tr>
                     <td><h3><?php echo $row['country']; ?></h3></td>
                     <td><h3><?php echo $row['no_community']; ?></h3></td>
                </tr> 
        </tr>           
    </div>
   
    
        <?php 

          }
          
          ?>
      
        </table>
    </table>

        
    </div>
    <div class="col-2" style="background-image: url(globe.jfif)"></div>
    <div class="col-5">
     <table class="table" style="color: white;">
            <tr>
                <th colspan="3" style="text-align: center;"><h1>LOCATION AT THE VICE-PROVINCIAL LEVEL</h1></th>
            </tr>
            <tr>
                <th colspan="3" style="text-align: center;"><h2>KENYA</h2></th>
            </tr>
                  <tr>
                    <td><h3 style="color: black;">Diocese</h3></td>
                    <td><h3 style="color: black;">Community</h3></td>
                  </tr>
                
        
                <?php
                    $select_stmt = $connection->prepare("SELECT * FROM communitieskenya"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                     ?>
                
                <th>              

                </th>  
            
                <tr>
                     <td class="col-5"><h4><?php echo $row['diocese']; ?></h4></td>
                     <td><h4><?php echo $row['name']; ?></h4></td>                     
                </tr> 
             </div>  
    
   
    
        <?php 

          }
          
          ?>


        </table>

        <table class="table" style="color: white;">
            
            <tr>
                <th colspan="3" style="text-align: center;"><h2>TANZANIA</h2></th>
            </tr>
                  <tr>
                    <td><h3 style="color: black;">Diocese</h3></td>
                    <td><h3 style="color: black;">Community</h3></td>
                  </tr>
                
        
                <?php
                    $select_stmt = $connection->prepare("SELECT * FROM communitiestanzania"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                     ?>
                
                <th>              

                </th>  
            
                <tr>
                     <td class="col-5"><h4><?php echo $row['diocese']; ?></h4></td>
                     <td><h4><?php echo $row['name']; ?></h4></td>                     
                </tr> 
             </div>  
    
   
    
        <?php 

          }
          
          ?>


        </table>

        <table class="table" style="color: white;">
            
            <tr>
                <th colspan="3" style="text-align: center;"><h2>UGANDA</h2></th>
            </tr>
                  <tr>
                    <td><h3 style="color: black;">Diocese</h3></td>
                    <td><h3 style="color: black;">Community</h3></td>
                  </tr>
                
        
                <?php
                    $select_stmt = $connection->prepare("SELECT * FROM communitiesuganda"); //sql select query
                    $select_stmt->execute();
                    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                    {
                     ?>
                
                <th>              

                </th>  
            
                <tr>
                     <td><h4 class="col-5"><?php echo $row['diocese']; ?></h4></td>
                     <td><h4><?php echo $row['name']; ?></h4></td>                     
                </tr> 
             </div>  
    
   
    
        <?php 

          }
          
          ?>


        </table>

          <div style="background-color: blue; color: white; text-align: center;"> 
            <h2>STATISTICS FOR THE VICE PROVINCE</h2>
          </div>

        <table class="table" style="color: white;"> 
                <tr>
                    <th><h2>Target</h2></th>
                    <th><h2>Number</h2></th>
                </tr>
                <tr>                    
                    <td><h3>Novices</h3></td>
                    <td style="text-align: center;">
                       <h3>
                        <?php
                        try {
    
                            $handler = new PDO('mysql:host=localhost;dbname=newaadb', 'root', '');
                            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            } catch (PDOException $e) {
                                echo $e->getMessage();
                                die();
    
                            }

                        $query=$handler->query("SELECT * FROM novices");
                        if($query->rowCount()){
                             ECHO $query->rowCount();
                        }else{
                         echo 'No result';
                        }

                        ?>
                          
                    </h3></td>                                      
                </tr>

                <tr>                    
                    <td><h3>Temporary professed</h3></td>
                     <td style="text-align: center;"> <h3>
                      <?php
                        try {
    
                            $handler = new PDO('mysql:host=localhost;dbname=newaadb', 'root', '');
                            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            } catch (PDOException $e) {
                                echo $e->getMessage();
                                die();
    
                            }

                        $query=$handler->query("SELECT * FROM temporary_vows");
                        if($query->rowCount()){
                             ECHO $query->rowCount();
                        }else{
                         echo 'No result';
                        }

                        ?>
                    </h3></td>                   
                </tr>
                <tr>                    
                    <td><h3>Perpetualy professed</h3></td>
                    <td style="text-align: center;"><h3> 
                      <?php
                        try {
    
                            $handler = new PDO('mysql:host=localhost;dbname=newaadb', 'root', '');
                            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            } catch (PDOException $e) {
                                echo $e->getMessage();
                                die();
    
                            }

                        $query=$handler->query("SELECT * FROM perpetual_vows");
                        if($query->rowCount()){
                             ECHO $query->rowCount();
                        }else{
                         echo 'No result';
                        }

                        ?>
                    </h3></td>                    
                </tr> 
                <tr>                    
                    <td><h3>Diaconate</h3></td>
                    <td style="text-align: center;"><h3> 
                      <?php
                        try {
    
                            $handler = new PDO('mysql:host=localhost;dbname=newaadb', 'root', '');
                            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            } catch (PDOException $e) {
                                echo $e->getMessage();
                                die();
    
                            }

                        $query=$handler->query("SELECT * FROM deacons");
                        if($query->rowCount()){
                             ECHO $query->rowCount();
                        }else{
                         echo 'No result';
                        }

                        ?>
                    </h3></td>                    
                </tr>
                <tr>                    
                    <td><h3>Priesthood</h3></td>
                    <td style="text-align: center;">
                       <h3>
                        <?php
                        try {
    
                            $handler = new PDO('mysql:host=localhost;dbname=newaadb', 'root', '');
                            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            } catch (PDOException $e) {
                                echo $e->getMessage();
                                die();
    
                            }

                        $query=$handler->query("SELECT * FROM priests");
                        if($query->rowCount()){
                             ECHO $query->rowCount();
                        }else{
                         echo 'No result';
                        }

                        ?>
                          
                    </h3></td>                                      
                </tr>                         
        </table>
    </div>
  </div>

</section>

</body>


<?php   include('footer.php'); ?>
<?php   include('modals/modal_about_us.php'); ?>
<?php   include('modals/modal_apostolate.php'); ?>
<?php   include('modals/formation.php'); ?>