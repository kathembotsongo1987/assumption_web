
<?php require'header.php'; ?>
<?php require_once 'admin/cruds/other_cruds/dbconnection.php'; ?>
<body>                           
  <div class="row" style="margin-top:0px;">
    <div class="lay_title"> <h1>The Joy of being lay Assumptionist</h1></div>  
      <div class="col-8">
        <div style="width: 100%; height: 100%;">
          <?php                           
              $select_stmt = $connection->prepare("SELECT * FROM slidelay"); //sql select query
              $select_stmt->execute();
              while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
          {
          ?>                                                    
            <img src="admin/cruds/other_cruds/upload/<?php echo $row['image']; ?>" class="MySlides w3-animate-fading" style="border-radius: 10px; border: all; border-top: solid; border-bottom: solid;">                              
          <?php
           }       
            ?>             
             <!-- JavaScript animation -->
          <script>
            var slideIndex = 1;
            carousel();
            function carousel(){
              var i;
              var slides = document.getElementsByClassName("MySlides");
              for (i = 0; i < slides.length; i++){
                   slides[i].style.display = "none";
              }
              slideIndex++;
              if (slideIndex > slides.length){slideIndex = 1}
                  slides[slideIndex-1].style.display = "block";
                  setTimeout(carousel, 5000);
              }
          </script>
        </div>
      </div>
      <div class="col-4">
        <form method="post">
          <div class="card" style="background-color: rgba(255,100,182,.2);" > 
            <h3 style="color: blue; text-align: center;">Register to become a member</h3>   
              <input class="form-control form-control-lg" type="text" name="fname" placeholder="First Name" required="input your First name">
              <input class="form-control form-control-lg" type="text" name="lname" placeholder="Last Name" required="input your Last name" >
              <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" required="input your Email">
              <input class="form-control form-control-lg" type="phone" name="phone" placeholder="Phone Number" required="input your phone number">
              <input class="form-control form-control-lg" type="text" name="country" placeholder="Country/location" required="input your location">
              <input class="form-control form-control-lg" type="text" name="parish" placeholder="Parish" required="input your Parosh">
              <textarea class="form-control form-control-lg" name="message" placeholder="Leave your message here" rows="3" required="Leave a text please!"></textarea>
              <button type="submit" name="submit" class="btn btn-primary">submit</button>
          </div>
        </form>
      </div>
      <?php                                       
        if(isset($_REQUEST['submit'])){                     
          $sql = "INSERT INTO lay_form (fname,lname,email,phone,country,parish, message) values (:fname,:lname,:email,:phone,:country,:parish, :message)";
            //Prepare statement
          $result = $connection->prepare($sql);
            //Bind Parameter to Prepare statment
          $result->bindParam(':fname', $fname, PDO::PARAM_STR);
          $result->bindParam(':lname', $lname, PDO::PARAM_STR);                 
          $result->bindParam(':email', $email, PDO::PARAM_STR);
          $result->bindParam(':phone', $phone, PDO::PARAM_STR);
          $result->bindParam(':country', $country, PDO::PARAM_STR);
          $result->bindParam(':parish', $parish, PDO::PARAM_STR);
          $result->bindParam(':message', $message, PDO::PARAM_STR);
            // variables and values
          $fname = $_REQUEST['fname'];
          $lname = $_REQUEST['lname'];                        
          $email = $_REQUEST['email'];
          $phone = $_REQUEST['phone'];
          $country = $_REQUEST['country'];
          $parish = $_REQUEST['parish'];
          $message = $_REQUEST['message'];
          $result->execute();
          echo "Your form has been submitted successfully <br>";
            // close prepared statement
          unset($result);
        }
        ?>                   
          </div>
            <div class="row">
              <div class="card" style="width: 48rem; margin-left: 26%; background-color: rgba(0,0,200,.2);">
               <div class="card-body">
                  <h1 style="text-align: center;">At the Origine</h1>
                    <p style="text-align: justify; margin-left: 15px;">
                      Ever since the beginning, the founder of the Assumptionists had conceived a     Congregation integrated with the laity. The Constitutions of 1855 defined the first Assumption not as a clerical community, but as an Association of priests and laity.                                   
                    </p>
                  <h1 style="text-align: center;">The Mission of Lay People</h1>
                      <p style="text-align: justify; margin-left: 15px;">The Assumptionist life is both for Religious and Lay people: “Fr. D’Alzon, from the outset seeks to associate lay people not only to the prayer life of the religious but also to their apostolate.” The first two professed lay assumptionists were two professors, Jules Monnier (1815-1856) and execute gene Germer-Durand (1812-1880), who, giving up their elevated professional posts, joined Father d’Alzon at the College of the Assumption and worked on the project with him. Not living in community, they were able “to make themselves available, 
                            under the direction of the Order, for works of charity and the apostolate”.</p> 
                </div>
              </div>                  
            </div>         
            <div class="row">
              <?php                        
                $select_stmt = $connection->prepare("SELECT * FROM lay_groups"); //sql select query
                $select_stmt->execute();
                while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                {
                ?>
                  <div class="col-4">
                    <img src="admin/cruds/other_cruds/upload/<?php echo $row['lay_image']; ?>" style="width: 100%;  height: 93%; border-left-color: blue; border-right-color: blue; border-top-color: blue; border-bottom-color: red; border-style: solid;">
                  </div>                        
                  <div class="col-4">
                    <div class="card">         
                      <div style="margin-left: 10px;  margin-right: 10px; line-height: 17px; overflow-y: scroll; overflow-x: scroll; height: 480px;">
                        <h3 style="text-transform: uppercase; text-align: center;"><?php echo $row['intro_title']; ?></h3>
                        <h5 style="text-align: justify; margin-right: 10px;" ><?php echo $row['intro_description']; ?></h5>
                        <h3 style="text-transform: uppercase; text-align: center;"><?php echo $row['articletitle']; ?></h3>
                        <h5 style="text-align: justify; margin-right: 10px;"><?php echo $row['articledescription']; ?></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">                
                    <iframe src="<?php echo $row['video']; ?>"  style="width: 100%; height: 99%;">></iframe>                                           
                  </div>              
                <?php
                 }          
                 ?>
            </div>                      
        </body>
<?php   include('footer.php'); ?>

         