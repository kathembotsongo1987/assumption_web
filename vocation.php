
<?php require_once 'admin/cruds/other_cruds/dbconnection.php';  ?>
          <?php            
                // insert a single row
            if(isset($_REQUEST['submit'])){                       
                $sql = "INSERT INTO form_vocation (name,diocese,phone,parish,message,email,country) values (:name,:diocese,:phone,:parish,:message,:email,:country)";
                $result = $connection->prepare($sql);
                $result->bindParam(':name', $name, PDO::PARAM_STR);
                $result->bindParam(':diocese', $diocese, PDO::PARAM_STR);
                $result->bindParam(':phone', $phone, PDO::PARAM_STR);
                $result->bindParam(':parish', $parish, PDO::PARAM_STR);
                        
                $result->bindParam(':message', $message, PDO::PARAM_STR);
                $result->bindParam(':email', $email, PDO::PARAM_STR);
                $result->bindParam(':country', $country, PDO::PARAM_STR);
               
                $name = $_REQUEST['name'];
                $diocese = $_REQUEST['diocese'];
                $phone = $_REQUEST['phone'];
                $parish = $_REQUEST['parish'];
                $message = $_REQUEST['message'];
                $email = $_REQUEST['email'];
                $country = $_REQUEST['country'];                       

                $result->execute();
                        // close prepared statement
                unset($result);
                }
                ?>
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
              <form method="post">
                <div class="card" style="background: blue; ">    
                  <input class="form-control form-control-lg" type="text" name="name" placeholder="Full Name" required="input your Full name">
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" required="Put your email" >
                  <input class="form-control form-control-lg" type="text" name="phone" placeholder="phone" required="input your Phone Number">
                    <select class="form-control form-control-lg" type="name" name="country" placeholder="country" required="select your country">
                      <option>Confirm your country</option>
                      <option value="KENYA">KENYA</option>
                      <option value="TANZANIA">TANZANIA</option>
                      <option value="UGANDA">UGANDA</option>                                
                    </select>
                      <input class="form-control form-control-lg" type="text" name="diocese" placeholder="Your diocese" required="input your diocese">
                      <input class="form-control form-control-lg" type="text" name="parish" placeholder="Parish" required="input your parish">
                        <textarea class="form-control form-control-lg" name="message" placeholder="Input your Form4 grades here or your current level in case you are still at school" rows="3" required="Leave a text please!"></textarea>
                          <button type="submit" name="submit" class="btn btn-primary">submit</button>
                </div>
              </form>
            </div>                          
    
      <?php
          }          
          ?>
    </section>


<?php   include('footer.php'); ?>
<?php   include('modals/modal_about_us.php'); ?>
<?php   include('modals/modal_apostolate.php'); ?>
<?php   include('modals/formation.php'); ?>                        