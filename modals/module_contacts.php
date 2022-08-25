

<?php require_once 'admin/cruds/other_cruds/dbconnection.php'; ?>

<!-- Modal for contact Phone Kenya Office -->
<div class="modal fade" id="vocphonekenya" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,85,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 27%;">Reach us On</h2>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>      
      <div class="modal-body" style="text-align: justify;">
        <?php        
          $select_stmt = $connection->prepare("SELECT * FROM contact_kenya"); //sql select query
          $select_stmt->execute();
          while($row=$select_stmt->fetch(PDO::FETCH_ASSOC)){
        ?>          
          <h3 style="text-align: center;"><?php echo $row['contact1']; ?></h3>   
        <?php
          }          
          ?>                               
      </div>
      <div class="modal-footer" style="background: rgba(70,85,200,.6);">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for contact Email Kenya Office -->


<div class="modal fade" id="vocemailkenyaoff" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Welcome to our office in Kenya</h2>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>      
      <div class="modal-body" style="text-align: justify;">                                          
        <form method="post"> 
            <div> 
                <input type="email" class="form-control" name="email" placeholder="your email" required>
            </div>
            <div> 
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div>
              <textarea rows="3" class="form-control" name="message" placeholder="Message Here..."></textarea>
            </div>
            <button type="send" name="submit_em" class="btn btn-success">send</button>
                <?php 
                    if(isset($_REQUEST['submit_em'])){
                      //check for empy field
                      if(($_REQUEST['email'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['message'] == "")){
                        echo "";
                      }else{
                        //using Named Placeholder
                        $sql = "INSERT INTO email_kenya(email, subject, message)VALUES(:email, :subject, :message)";
                        //Prepare statement
                        $result = $connection->prepare($sql);

                        //Bind Parameter to Prepare statment
                        $result->bindParam(':email', $email, PDO::PARAM_STR);
                        $result->bindParam(':subject', $subject, PDO::PARAM_STR);
                        $result->bindParam(':message', $message, PDO::PARAM_STR);
                        
                        // variables and values
                        $email = $_REQUEST['email'];
                        $subject = $_REQUEST['subject'];
                        $message = $_REQUEST['message'];
                        
                        $result->execute();

                        echo "";

                        // close prepared statement
                        unset($result);
                      }
                    }
                  ?>
        </form>
      </div>
      <div class="modal-footer" style="background: rgba(70,15,200,.6);">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>       
      </div>
    </div>
  </div>
</div>

<!-- Modal for contact Phone Kenya Office -->
<div class="modal fade" id="vocphonekenya" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,85,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 27%;">Reach us On</h2>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>      
      <div class="modal-body" style="text-align: justify;">
        <?php        
          $select_stmt = $connection->prepare("SELECT * FROM contact_kenya"); //sql select query
          $select_stmt->execute();
          while($row=$select_stmt->fetch(PDO::FETCH_ASSOC)){
        ?>          
          <h3 style="text-align: center;"><?php echo $row['contact1']; ?></h3>   
        <?php
          }          
          ?>                               
      </div>
      <div class="modal-footer" style="background: rgba(70,85,200,.6);">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for contact Email Kenya Office -->


<div class="modal fade" id="vocemailkenyaoff" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center; background: rgba(70,15,200,.6);">
        <h2 class="modal-title" id="exampleModalLabel" style="color: black; margin-left: 5%;">Welcome to our office in Kenya</h2>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>      
      <div class="modal-body" style="text-align: justify;">                                          
        <form method="post"> 
            <div> 
                <input type="email" class="form-control" name="email" placeholder="your email" required>
            </div>
            <div> 
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div>
              <textarea rows="3" class="form-control" name="message" placeholder="Message Here..."></textarea>
            </div>
            <button type="send" name="submit_em" class="btn btn-success">send</button>
                <?php 
                    if(isset($_REQUEST['submit_em'])){
                      //check for empy field
                      if(($_REQUEST['email'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['message'] == "")){
                        echo "";
                      }else{
                        //using Named Placeholder
                        $sql = "INSERT INTO email_kenya(email, subject, message)VALUES(:email, :subject, :message)";
                        //Prepare statement
                        $result = $connection->prepare($sql);

                        //Bind Parameter to Prepare statment
                        $result->bindParam(':email', $email, PDO::PARAM_STR);
                        $result->bindParam(':subject', $subject, PDO::PARAM_STR);
                        $result->bindParam(':message', $message, PDO::PARAM_STR);
                        
                        // variables and values
                        $email = $_REQUEST['email'];
                        $subject = $_REQUEST['subject'];
                        $message = $_REQUEST['message'];
                        
                        $result->execute();

                        echo "";

                        // close prepared statement
                        unset($result);
                      }
                    }
                  ?>
        </form>
      </div>
      <div class="modal-footer" style="background: rgba(70,15,200,.6);">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>       
      </div>
    </div>
  </div>
</div>