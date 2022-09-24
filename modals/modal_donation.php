
<!-- Modal donation for Vocation -->
<div class="modal fade" id="Vocation" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Thanks for supporting our <span style="color: blue;">Vocations</span>. Together we can do great.</h2>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body" style="text-align: justify;">
              <h3>Cheques can be addressed to: </h3>             
                <p style="text-align: center;"> 
                  Account Name: ASSUMPTIONIST FATHERS<br>
                  Bank: NBK || Branche Harambe street<br>
                  Swift Code: CITIKENAXXX<br>
                  Kenya Shilling Account (KES) Account Number: 4558796525<br>
                  USD Dollar Account Number: 336695875<br>
                  EURO Account Number: 66999857</p>
              <hr>

              <h3>MPSA</h3>
                <div style="background: rgba(15,15,15,.3);"> 
                 <p style="text-align: center;"> 
                  PAYBILL: 556963 <br>  
                  ACCOUNT NUMBER: purpose of your donation (Ex: Vocation,Formation,...)
                 </p>
                </div>
              <hr>  

              <form method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-2"> Amount*: </div>
                      <div class="col-8"> 
                          <input type="number" name="donation" class="form-control" min="5" placeholder="10.00" required >
                      </div>
                      <div class="col-2"> 
                          <select name="currency"  class="form-control">  
                              <option>KSH</option>
                              <option>USD</option>
                              <option>EURO</option>
                          </select>
                      </div>

                      <div class="col-2"> Name*: </div>
                      <div class="col-5"> 
                          <input type="text" name="fname" class="form-control" placeholder="John" required>
                      </div>
                      <div class="col-5"> 
                              <input type="text" name="lname"  class="form-control" placeholder="Garoti" required>
                      </div>  

                      <div class="col-4"> Phone Number*: </div>
                      <div class="col-8"> 
                          <input type="phone" name="phone" class="form-control" placeholder="+254......." required>
                      </div>

                      <div class="col-4"> Email address*: </div>
                      <div class="col-8"> 
                          <input type="email" name="email"  class="form-control" placeholder="gut@gmail.com" required>
                      </div>

                      <div class="col-4"> Town / city*: </div>
                      <div class="col-8"> 
                          <input type="text" name="town"  class="form-control" placeholder="Nairobi" required>
                      </div> 
                      <div class="col-4"> Country*: </div>
                      <div class="col-8">

                      <?php include ('countrypicker.php'); ?>

                      </div>
                      <div class="col-4"> Relation*: </div>
                        <div class="col-8"> 
                          <select class="form-control" name="relation"  data-default="Lay Assomptionist">                           
                            <option value="Lay Assomptionist">Lay Assomptionist</option>
                            <option value="Friend">Friend</option>
                            <option value="Religious a.a">Religious a.a</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>                                                                 
                  </div>
                  <div class="modal-footer" style="background: rgba(70,15,200,.6);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="donation_vocation" class="btn btn-primary" value="Ok">                
                  </div>         
              </form>
          </div>
            
      </div>
    </div>
</div>

<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>
  <?php   
    if(isset($_REQUEST['donation_vocation'])){
      try{        
        $donation = $_REQUEST['donation'];        
        $currency = $_REQUEST['currency'];        
        $fname = $_REQUEST['fname'];        
        $lname = $_REQUEST['lname'];        
        $phone = $_REQUEST['phone'];        
        $email = $_REQUEST['email'];        
        $town = $_REQUEST['town'];        
        $country = $_REQUEST['country'];        
        $relation = $_REQUEST['relation'];        
          if (empty($donation)) {
            $errorMsg = "please Enter the contact1";  
          }
          if(!isset($errorMsg)){
              $insert_stmt = $connection->prepare('INSERT INTO donation_vocation(donation,currency, fname, lname, phone, email, town, country, relation) VALUES(:donation, :currency, :fname, :lname, :phone, :email, :town, :country, :relation)'); // sql insert query       
              $insert_stmt->bindParam(':donation', $donation);          
              $insert_stmt->bindParam(':currency', $currency);          
              $insert_stmt->bindParam(':fname', $fname);          
              $insert_stmt->bindParam(':lname', $lname);          
              $insert_stmt->bindParam(':phone', $phone);          
              $insert_stmt->bindParam(':email', $email);          
              $insert_stmt->bindParam(':town', $town);          
              $insert_stmt->bindParam(':country', $country);          
              $insert_stmt->bindParam(':relation', $relation);          
                     
                if($insert_stmt->execute()){
                    
                }
          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
      }
    }   
   ?>



<!-- Modal donation for Formation -->
<div class="modal fade" id="Formation" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Thanks for supporting our <span style="color: blue;">Formation</span>. Together we can do great.</h2>         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body" style="text-align: justify;">
              <h3>Cheques can be addressed to: </h3>             
                <p style="text-align: center;"> 
                  Account Name: ASSUMPTIONIST FATHERS<br>
                  Bank: NBK || Branche Harambe street<br>
                  Swift Code: CITIKENAXXX<br>
                  Kenya Shilling Account (KES) Account Number: 4558796525<br>
                  USD Dollar Account Number: 336695875<br>
                  EURO Account Number: 66999857</p>
              <hr>

              <h3>MPSA</h3>
                <div style="background: rgba(15,15,15,.3);"> 
                 <p style="text-align: center;"> 
                  PAYBILL: 556963 <br>  
                  ACCOUNT NUMBER: purpose of your donation (Ex: Vocation,Formation,...)
                 </p>
                </div>
              <hr>  

              <form method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-2"> Amount*: </div>
                      <div class="col-8"> 
                          <input type="number" name="donation" class="form-control" min="5" placeholder="10.00" required >
                      </div>
                      <div class="col-2"> 
                          <select name="currency"  class="form-control">  
                              <option>KSH</option>
                              <option>USD</option>
                              <option>EURO</option>
                          </select>
                      </div>

                      <div class="col-2"> Name*: </div>
                      <div class="col-5"> 
                          <input type="text" name="fname" class="form-control" placeholder="John" required>
                      </div>
                      <div class="col-5"> 
                              <input type="text" name="lname"  class="form-control" placeholder="Garoti" required>
                      </div>  

                      <div class="col-4"> Phone Number*: </div>
                      <div class="col-8"> 
                          <input type="phone" name="phone" class="form-control" placeholder="+254......." required>
                      </div>

                      <div class="col-4"> Email address*: </div>
                      <div class="col-8"> 
                          <input type="email" name="email"  class="form-control" placeholder="gut@gmail.com" required>
                      </div>

                      <div class="col-4"> Town / city*: </div>
                      <div class="col-8"> 
                          <input type="text" name="town"  class="form-control" placeholder="Nairobi" required>
                      </div> 
                      <div class="col-4"> Country*: </div>
                      <div class="col-8">

                      <?php   include('countrypicker.php'); ?>

                      </div>
                      <div class="col-4"> Relation*: </div>
                        <div class="col-8"> 
                          <select class="form-control" name="relation"  data-default="Lay Assomptionist">                           
                            <option value="Lay Assomptionist">Lay Assomptionist</option>
                            <option value="Friend">Friend</option>
                            <option value="Religious a.a">Religious a.a</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>                                                                 
                  </div>
                  <div class="modal-footer" style="background: rgba(70,15,200,.6);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="donation_formation" class="btn btn-primary" value="Ok">                
                  </div>         
              </form>
          </div>
            
      </div>
    </div>
</div>

<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>
  <?php   
    if(isset($_REQUEST['donation_formation'])){
      try{        
        $donation = $_REQUEST['donation'];        
        $currency = $_REQUEST['currency'];        
        $fname = $_REQUEST['fname'];        
        $lname = $_REQUEST['lname'];        
        $phone = $_REQUEST['phone'];        
        $email = $_REQUEST['email'];        
        $town = $_REQUEST['town'];        
        $country = $_REQUEST['country'];        
        $relation = $_REQUEST['relation'];        
          if (empty($donation)) {
            $errorMsg = "please Enter the contact1";  
          }
          if(!isset($errorMsg)){
              $insert_stmt = $connection->prepare('INSERT INTO donation_formation(donation,currency, fname, lname, phone, email, town, country, relation)VALUES(:donation, :currency, :fname, :lname, :phone, :email, :town, :country, :relation)'); // sql insert query       
              $insert_stmt->bindParam(':donation', $donation);          
              $insert_stmt->bindParam(':currency', $currency);          
              $insert_stmt->bindParam(':fname', $fname);          
              $insert_stmt->bindParam(':lname', $lname);          
              $insert_stmt->bindParam(':phone', $phone);          
              $insert_stmt->bindParam(':email', $email);          
              $insert_stmt->bindParam(':town', $town);          
              $insert_stmt->bindParam(':country', $country);          
              $insert_stmt->bindParam(':relation', $relation);          
                     
                if($insert_stmt->execute()){
                    
                }
          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
      }
    }   
   ?>


<!-- Modal donation for Parish -->
<div class="modal fade" id="Parishes" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Thanks for supporting our <span style="color: blue;">Parishes</span>. Together we can do great.</h2>         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body" style="text-align: justify;">
              <h3>Cheques can be addressed to: </h3>             
                <p style="text-align: center;"> 
                  Account Name: ASSUMPTIONIST FATHERS<br>
                  Bank: NBK || Branche Harambe street<br>
                  Swift Code: CITIKENAXXX<br>
                  Kenya Shilling Account (KES) Account Number: 4558796525<br>
                  USD Dollar Account Number: 336695875<br>
                  EURO Account Number: 66999857</p>
              <hr>

              <h3>MPSA</h3>
                <div style="background: rgba(15,15,15,.3);"> 
                 <p style="text-align: center;"> 
                  PAYBILL: 556963 <br>  
                  ACCOUNT NUMBER: purpose of your donation (Ex: Vocation,Formation,...)
                 </p>
                </div>
              <hr>  

              <form method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-2"> Amount*: </div>
                      <div class="col-8"> 
                          <input type="number" name="donation" class="form-control" min="5" placeholder="10.00" required >
                      </div>
                      <div class="col-2"> 
                          <select name="currency"  class="form-control">  
                              <option>KSH</option>
                              <option>USD</option>
                              <option>EURO</option>
                          </select>
                      </div>

                      <div class="col-2"> Name*: </div>
                      <div class="col-5"> 
                          <input type="text" name="fname" class="form-control" placeholder="John" required>
                      </div>
                      <div class="col-5"> 
                              <input type="text" name="lname"  class="form-control" placeholder="Garoti" required>
                      </div>  

                      <div class="col-4"> Phone Number*: </div>
                      <div class="col-8"> 
                          <input type="phone" name="phone" class="form-control" placeholder="+254......." required>
                      </div>

                      <div class="col-4"> Email address*: </div>
                      <div class="col-8"> 
                          <input type="email" name="email"  class="form-control" placeholder="gut@gmail.com" required>
                      </div>

                      <div class="col-4"> Town / city*: </div>
                      <div class="col-8"> 
                          <input type="text" name="town"  class="form-control" placeholder="Nairobi" required>
                      </div> 
                      <div class="col-4"> Country*: </div>
                      <div class="col-8">

                      <?php   include('countrypicker.php'); ?>

                      </div>
                      <div class="col-4"> Relation*: </div>
                        <div class="col-8"> 
                          <select class="form-control" name="relation"  data-default="Lay Assomptionist">                           
                            <option value="Lay Assomptionist">Lay Assomptionist</option>
                            <option value="Friend">Friend</option>
                            <option value="Religious a.a">Religious a.a</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>                                                                 
                  </div>
                  <div class="modal-footer" style="background: rgba(70,15,200,.6);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="donation_parishes" class="btn btn-primary" value="Ok">                
                  </div>         
              </form>
          </div>
            
      </div>
    </div>
</div>

<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>
  <?php   
    if(isset($_REQUEST['donation_parishes'])){
      try{        
        $donation = $_REQUEST['donation'];        
        $currency = $_REQUEST['currency'];        
        $fname = $_REQUEST['fname'];        
        $lname = $_REQUEST['lname'];        
        $phone = $_REQUEST['phone'];        
        $email = $_REQUEST['email'];        
        $town = $_REQUEST['town'];        
        $country = $_REQUEST['country'];        
        $relation = $_REQUEST['relation'];        
          if (empty($donation)) {
            $errorMsg = "please Enter the contact1";  
          }
          if(!isset($errorMsg)){
              $insert_stmt = $connection->prepare('INSERT INTO donation_parishes(donation,currency, fname, lname, phone, email, town, country, relation)VALUES(:donation, :currency, :fname, :lname, :phone, :email, :town, :country, :relation)'); // sql insert query       
              $insert_stmt->bindParam(':donation', $donation);          
              $insert_stmt->bindParam(':currency', $currency);          
              $insert_stmt->bindParam(':fname', $fname);          
              $insert_stmt->bindParam(':lname', $lname);          
              $insert_stmt->bindParam(':phone', $phone);          
              $insert_stmt->bindParam(':email', $email);          
              $insert_stmt->bindParam(':town', $town);          
              $insert_stmt->bindParam(':country', $country);          
              $insert_stmt->bindParam(':relation', $relation);          
                     
                if($insert_stmt->execute()){
                    
                }
          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
      }
    }   
   ?>



<!-- Modal donation for Shrines -->
<div class="modal fade" id="Shrines" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Thanks for supporting our <span style="color: blue;">Shrines</span>. Together we can do great.</h2>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body" style="text-align: justify;">
              <h3>Cheques can be addressed to: </h3>             
                <p style="text-align: center;"> 
                  Account Name: ASSUMPTIONIST FATHERS<br>
                  Bank: NBK || Branche Harambe street<br>
                  Swift Code: CITIKENAXXX<br>
                  Kenya Shilling Account (KES) Account Number: 4558796525<br>
                  USD Dollar Account Number: 336695875<br>
                  EURO Account Number: 66999857</p>
              <hr>

              <h3>MPSA</h3>
                <div style="background: rgba(15,15,15,.3);"> 
                 <p style="text-align: center;"> 
                  PAYBILL: 556963 <br>  
                  ACCOUNT NUMBER: purpose of your donation (Ex: Vocation,Formation,...)
                 </p>
                </div>
              <hr>  

              <form method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-2"> Amount*: </div>
                      <div class="col-8"> 
                          <input type="number" name="donation" class="form-control" min="5" placeholder="10.00" required >
                      </div>
                      <div class="col-2"> 
                          <select name="currency"  class="form-control">  
                              <option>KSH</option>
                              <option>USD</option>
                              <option>EURO</option>
                          </select>
                      </div>

                      <div class="col-2"> Name*: </div>
                      <div class="col-5"> 
                          <input type="text" name="fname" class="form-control" placeholder="John" required>
                      </div>
                      <div class="col-5"> 
                              <input type="text" name="lname"  class="form-control" placeholder="Garoti" required>
                      </div>  

                      <div class="col-4"> Phone Number*: </div>
                      <div class="col-8"> 
                          <input type="phone" name="phone" class="form-control" placeholder="+254......." required>
                      </div>

                      <div class="col-4"> Email address*: </div>
                      <div class="col-8"> 
                          <input type="email" name="email"  class="form-control" placeholder="gut@gmail.com" required>
                      </div>

                      <div class="col-4"> Town / city*: </div>
                      <div class="col-8"> 
                          <input type="text" name="town"  class="form-control" placeholder="Nairobi" required>
                      </div> 
                      <div class="col-4"> Country*: </div>
                      <div class="col-8">

                      <?php   include('countrypicker.php'); ?>

                      </div>
                      <div class="col-4"> Relation*: </div>
                        <div class="col-8"> 
                          <select class="form-control" name="relation"  data-default="Lay Assomptionist">                           
                            <option value="Lay Assomptionist">Lay Assomptionist</option>
                            <option value="Friend">Friend</option>
                            <option value="Religious a.a">Religious a.a</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>                                                                 
                  </div>
                  <div class="modal-footer" style="background: rgba(70,15,200,.6);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="donation_shrines" class="btn btn-primary" value="Ok">                
                  </div>         
              </form>
          </div>
            
      </div>
    </div>
</div>

<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>
  <?php   
    if(isset($_REQUEST['donation_shrines'])){
      try{        
        $donation = $_REQUEST['donation'];        
        $currency = $_REQUEST['currency'];        
        $fname = $_REQUEST['fname'];        
        $lname = $_REQUEST['lname'];        
        $phone = $_REQUEST['phone'];        
        $email = $_REQUEST['email'];        
        $town = $_REQUEST['town'];        
        $country = $_REQUEST['country'];        
        $relation = $_REQUEST['relation'];        
          if (empty($donation)) {
            $errorMsg = "please Enter the contact1";  
          }
          if(!isset($errorMsg)){
              $insert_stmt = $connection->prepare('INSERT INTO donation_shrines(donation,currency, fname, lname, phone, email, town, country, relation)VALUES(:donation, :currency, :fname, :lname, :phone, :email, :town, :country, :relation)'); // sql insert query       
              $insert_stmt->bindParam(':donation', $donation);          
              $insert_stmt->bindParam(':currency', $currency);          
              $insert_stmt->bindParam(':fname', $fname);          
              $insert_stmt->bindParam(':lname', $lname);          
              $insert_stmt->bindParam(':phone', $phone);          
              $insert_stmt->bindParam(':email', $email);          
              $insert_stmt->bindParam(':town', $town);          
              $insert_stmt->bindParam(':country', $country);          
              $insert_stmt->bindParam(':relation', $relation);          
                     
                if($insert_stmt->execute()){
                    
                }
          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
      }
    }   
   ?>


<!-- Modal donation for Social work -->
<div class="modal fade" id="SocialWork" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Thanks for supporting our <span style="color: blue;">Social Works</span>. Together we can do great.</h2>         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body" style="text-align: justify;">
              <h3>Cheques can be addressed to: </h3>             
                <p style="text-align: center;"> 
                  Account Name: ASSUMPTIONIST FATHERS<br>
                  Bank: NBK || Branche Harambe street<br>
                  Swift Code: CITIKENAXXX<br>
                  Kenya Shilling Account (KES) Account Number: 4558796525<br>
                  USD Dollar Account Number: 336695875<br>
                  EURO Account Number: 66999857</p>
              <hr>

              <h3>MPSA</h3>
                <div style="background: rgba(15,15,15,.3);"> 
                 <p style="text-align: center;"> 
                  PAYBILL: 556963 <br>  
                  ACCOUNT NUMBER: purpose of your donation (Ex: Vocation,Formation,...)
                 </p>
                </div>
              <hr>  

              <form method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-2"> Amount*: </div>
                      <div class="col-8"> 
                          <input type="number" name="donation" class="form-control" min="5" placeholder="10.00" required >
                      </div>
                      <div class="col-2"> 
                          <select name="currency"  class="form-control">  
                              <option>KSH</option>
                              <option>USD</option>
                              <option>EURO</option>
                          </select>
                      </div>

                      <div class="col-2"> Name*: </div>
                      <div class="col-5"> 
                          <input type="text" name="fname" class="form-control" placeholder="John" required>
                      </div>
                      <div class="col-5"> 
                              <input type="text" name="lname"  class="form-control" placeholder="Garoti" required>
                      </div>  

                      <div class="col-4"> Phone Number*: </div>
                      <div class="col-8"> 
                          <input type="phone" name="phone" class="form-control" placeholder="+254......." required>
                      </div>

                      <div class="col-4"> Email address*: </div>
                      <div class="col-8"> 
                          <input type="email" name="email"  class="form-control" placeholder="gut@gmail.com" required>
                      </div>

                      <div class="col-4"> Town / city*: </div>
                      <div class="col-8"> 
                          <input type="text" name="town"  class="form-control" placeholder="Nairobi" required>
                      </div> 
                      <div class="col-4"> Country*: </div>
                      <div class="col-8">

                      <?php   include('countrypicker.php'); ?>

                      </div>
                      <div class="col-4"> Relation*: </div>
                        <div class="col-8"> 
                          <select class="form-control" name="relation"  data-default="Lay Assomptionist">                           
                            <option value="Lay Assomptionist">Lay Assomptionist</option>
                            <option value="Friend">Friend</option>
                            <option value="Religious a.a">Religious a.a</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>                                                                 
                  </div>
                  <div class="modal-footer" style="background: rgba(70,15,200,.6);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="donation_socialworks" class="btn btn-primary" value="Ok">                
                  </div>         
              </form>
          </div>
            
      </div>
    </div>
</div>

<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>
  <?php   
    if(isset($_REQUEST['donation_socialworks'])){
      try{        
        $donation = $_REQUEST['donation'];        
        $currency = $_REQUEST['currency'];        
        $fname = $_REQUEST['fname'];        
        $lname = $_REQUEST['lname'];        
        $phone = $_REQUEST['phone'];        
        $email = $_REQUEST['email'];        
        $town = $_REQUEST['town'];        
        $country = $_REQUEST['country'];        
        $relation = $_REQUEST['relation'];        
          if (empty($donation)) {
            $errorMsg = "please Enter the contact1";  
          }
          if(!isset($errorMsg)){
              $insert_stmt = $connection->prepare('INSERT INTO donation_socialworks(donation,currency, fname, lname, phone, email, town, country, relation)VALUES(:donation, :currency, :fname, :lname, :phone, :email, :town, :country, :relation)'); // sql insert query       
              $insert_stmt->bindParam(':donation', $donation);          
              $insert_stmt->bindParam(':currency', $currency);          
              $insert_stmt->bindParam(':fname', $fname);          
              $insert_stmt->bindParam(':lname', $lname);          
              $insert_stmt->bindParam(':phone', $phone);          
              $insert_stmt->bindParam(':email', $email);          
              $insert_stmt->bindParam(':town', $town);          
              $insert_stmt->bindParam(':country', $country);          
              $insert_stmt->bindParam(':relation', $relation);          
                     
                if($insert_stmt->execute()){
                    
                }
          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
      }
    }   
   ?>





<!-- Modal donation for Other Projects -->
<div class="modal fade" id="OtherProjects" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Thanks for supporting our <span style="color: blue;">Our Variance Projects</span>. Together we can do great.</h2>         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body" style="text-align: justify;">
              <h3>Cheques can be addressed to: </h3>             
                <p style="text-align: center;"> 
                  Account Name: ASSUMPTIONIST FATHERS<br>
                  Bank: NBK || Branche Harambe street<br>
                  Swift Code: CITIKENAXXX<br>
                  Kenya Shilling Account (KES) Account Number: 4558796525<br>
                  USD Dollar Account Number: 336695875<br>
                  EURO Account Number: 66999857</p>
              <hr>

              <h3>MPSA</h3>
                <div style="background: rgba(15,15,15,.3);"> 
                 <p style="text-align: center;"> 
                  PAYBILL: 556963 <br>  
                  ACCOUNT NUMBER: purpose of your donation (Ex: Vocation,Formation,...)
                 </p>
                </div>
              <hr>  

              <form method="post" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-2"> Amount*: </div>
                      <div class="col-8"> 
                          <input type="number" name="donation" class="form-control" min="5" placeholder="10.00" required >
                      </div>
                      <div class="col-2"> 
                          <select name="currency"  class="form-control">  
                              <option>KSH</option>
                              <option>USD</option>
                              <option>EURO</option>
                          </select>
                      </div>

                      <div class="col-2"> Name*: </div>
                      <div class="col-5"> 
                          <input type="text" name="fname" class="form-control" placeholder="John" required>
                      </div>
                      <div class="col-5"> 
                              <input type="text" name="lname"  class="form-control" placeholder="Garoti" required>
                      </div>  

                      <div class="col-4"> Phone Number*: </div>
                      <div class="col-8"> 
                          <input type="phone" name="phone" class="form-control" placeholder="+254......." required>
                      </div>

                      <div class="col-4"> Email address*: </div>
                      <div class="col-8"> 
                          <input type="email" name="email"  class="form-control" placeholder="gut@gmail.com" required>
                      </div>

                      <div class="col-4"> Town / city*: </div>
                      <div class="col-8"> 
                          <input type="text" name="town"  class="form-control" placeholder="Nairobi" required>
                      </div> 
                      <div class="col-4"> Country*: </div>
                      <div class="col-8">

                      <?php   include('countrypicker.php'); ?>

                      </div>
                      <div class="col-4"> Relation*: </div>
                        <div class="col-8"> 
                          <select class="form-control" name="relation"  data-default="Lay Assomptionist">                           
                            <option value="Lay Assomptionist">Lay Assomptionist</option>
                            <option value="Friend">Friend</option>
                            <option value="Religious a.a">Religious a.a</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>                                                                 
                  </div>
                  <div class="modal-footer" style="background: rgba(70,15,200,.6);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="donation_submit" class="btn btn-primary" value="Ok">                
                  </div>         
              </form>
          </div>
            
      </div>
    </div>
</div>

<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>
  <?php   
    if(isset($_REQUEST['donation_submit'])){
      try{        
        $donation = $_REQUEST['donation'];        
        $currency = $_REQUEST['currency'];        
        $fname = $_REQUEST['fname'];        
        $lname = $_REQUEST['lname'];        
        $phone = $_REQUEST['phone'];        
        $email = $_REQUEST['email'];        
        $town = $_REQUEST['town'];        
        $country = $_REQUEST['country'];        
        $relation = $_REQUEST['relation'];        
          if (empty($donation)) {
            $errorMsg = "please Enter the contact1";  
          }
          if(!isset($errorMsg)){
              $insert_stmt = $connection->prepare('INSERT INTO donation_other_projects(donation,currency, fname, lname, phone, email, town, country, relation)VALUES(:donation, :currency, :fname, :lname, :phone, :email, :town, :country, :relation)'); // sql insert query       
              $insert_stmt->bindParam(':donation', $donation);          
              $insert_stmt->bindParam(':currency', $currency);          
              $insert_stmt->bindParam(':fname', $fname);          
              $insert_stmt->bindParam(':lname', $lname);          
              $insert_stmt->bindParam(':phone', $phone);          
              $insert_stmt->bindParam(':email', $email);          
              $insert_stmt->bindParam(':town', $town);          
              $insert_stmt->bindParam(':country', $country);          
              $insert_stmt->bindParam(':relation', $relation);          
                     
                if($insert_stmt->execute()){
                    
                }
          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
      }
    }   
   ?>













