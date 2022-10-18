
<?php require 'dbconnection.php'; ?>
	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try{
				$fname = $_REQUEST['fname']; // this txt_name is the name of the input coming from the form	
				$lname = $_REQUEST['lname']; // 
				$email = $_REQUEST['email']; // 
				$phone = $_REQUEST['phone']; 				
				$country = $_REQUEST['country'];
				$parish = $_REQUEST['parish'];
				$message = $_REQUEST['message'];

				if(empty($fname)){
					$errorMsg = "please Enter First name";					
				} 
				else if (empty($lname)) {
					$errorMsg = "please Enter Last name";	
				}
				else if (empty($email)) {
					$errorMsg = "please Enter email";	
				}
				else if (empty($phone)) {
					$errorMsg = "please Enter phone";	
				}
				
				else if (empty($country)) {
					$errorMsg = "please Enter country of origin";	
				}
				
				else if(empty($parish)){
						$errorMsg = "Please enter parish of origin";
				}
				else if(empty($message)){
						$errorMsg = "Please enter message";
					} 

				  	if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO lay_form(fname, lname, email, phone, country, parish, message) VALUES(:fname, :lname, :email, :phone, :country, :parish, :message)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':fname',$fname); // bind all parameter
				  				$insert_stmt->bindParam(':lname',$lname);
				  				$insert_stmt->bindParam(':email',$email);
				  				$insert_stmt->bindParam(':phone',$phone);
				  				$insert_stmt->bindParam(':country',$country);
				  				$insert_stmt->bindParam(':parish',$parish);				  			
				  				$insert_stmt->bindParam(':message',$message);				  			
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("location:read_lay_form.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>


<?php require 'layout_header.php'; ?>

<div class="wrapper">			
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color: blue; text-align: center;"><a href="create_lay_form.php"></a>DATA MANIPULATION || OUR LAY ASSUMPTIONIST</h1>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-3 control-label">First Name</label>
								<div class="col-sm-6">
									<input type="text" name="fname" class="form-control" placeholder="enter email">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Last Name</label>
								<div class="col-sm-6">
									<input type="text" name="lname" class="form-control" placeholder="enter last name">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
								<div class="col-sm-6">
									<input type="text" name="email" class="form-control" placeholder="enter email">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Phone</label>
								<div class="col-sm-6">
									<input type="text" name="phone" class="form-control" placeholder="enter phone number">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Country</label>
								<div class="col-sm-6">
									<input type="text" name="country" class="form-control" placeholder="enter your country of origin">
								</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-3 control-label">Parish</label>
								<div class="col-sm-6">
									<input type="text" name="parish" class="form-control" placeholder="enter enter parish of origin">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Message</label>
								<div class="col-sm-6">
									<input type="text" name="message" class="form-control" placeholder="enter message">
								</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<label class="col-sm-6 control-label">Action</label>
									<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
										<a href="read_lay_form.php" class="btn btn-danger">Cancel</a>
							</div>
						</div>
					</form>	
				</div>
            </div>
        </div>
    </div>
</div>
<?php require 'layout_footer.php' ;?>	