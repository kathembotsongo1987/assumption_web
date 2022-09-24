
<?php include ('admin/cruds/other_cruds/dbconnection.php'); ?>



<!-- Login -->

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background-color: rgba(15,200,150,.3)">
        <h2 class="modal-title" style="margin-left: 37%;">Login</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
    <label for="phone" class="form-label">Username</label>
    <input type="phone" class="form-control" name="phone" id="phone">
    <div id="phone" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Login</button>

  <a href="#" class="btn btn-secondary" style="float:right;" data-bs-toggle="modal" data-bs-target="#Register">Register First</a>
</form>
      </div>      
    </div>
  </div>
</div>

<!-- Registration -->

<div class="modal fade" id="Register" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" style="background-color: rgba(0,4,180,.2);">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background-color: rgba(120,20,150,.3)">
        <h2 class="modal-title" style="margin-left: 33%;">Registration</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" class="form-control" name="fname" id="username">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Last Name</label>
              <input type="text" class="form-control" name="lname" id="password">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="username">
          </div>
           <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
              <input type="phone" class="form-control" name="phone" id="username">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
          </div>
            <button type="submit" name="submit_register" class="btn btn-primary">
            Register</button>
            <?php   
               if(isset($_REQUEST['submit_register'])){
                try{        
                  $fname = $_REQUEST['fname'];        
                  $lname = $_REQUEST['lname'];        
                  $email = $_REQUEST['email'];        
                  $phone = $_REQUEST['phone'];        
                  $password = $_REQUEST['password'];        
                    if(!isset($errorMsg)){
                       $insert_stmt = $connection->prepare('INSERT INTO register(fname,lname, email, phone, pass)VALUES(:fname, :lname, :email, :phone, :pass)'); // sql insert query       
                      $insert_stmt->bindParam(':fname', $fname);          
                      $insert_stmt->bindParam(':lname', $lname);          
                      $insert_stmt->bindParam(':email', $email);          
                      $insert_stmt->bindParam(':phone', $phone);          
                      $insert_stmt->bindParam(':pass', $password);          
                
                     if($insert_stmt->execute()){
                    
                }
          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
      }
    }   
   ?>

        </form>
      </div>      
    </div>
  </div>
</div>

