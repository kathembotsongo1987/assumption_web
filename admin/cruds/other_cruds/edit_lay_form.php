
<?php 
 
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM lay_form WHERE id =:id'); //sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	catch(PDOException $e){
		$e->getMessage();
	}
}

if(isset($_REQUEST['btn_update'])){
		try
			{
								
				$fname = $_REQUEST['fname']; // this txt_name is the name of the input coming from the form	
				$lname = $_REQUEST['lname']; // 
				$email = $_REQUEST['email']; // 
				$phone = $_REQUEST['phone'];				
				$country = $_REQUEST['country'];
				$parish = $_REQUEST['parish'];
				$message = $_REQUEST['message'];
								
				
				if(empty($fname)){
					$errorMsg = "please Enter the your first name";					
				} 
				else if (empty($lname)) {
					$errorMsg = "please Enter your last name";	
				}
				else if (empty($email)) {
					$errorMsg = "please Enter your email address";	
				}
				else if (empty($phone)) {
					$errorMsg = "please Enter your phone number";	
				}
				
				else if (empty($country)) {
					$errorMsg = "please Enter your residential country ";	
				}
				
				else if(empty($parish)){
						$errorMsg = "Please Enter your parish";
					} 
				else if(empty($message)){
						$errorMsg = "Please send us your message.";
				} 
				  		

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE lay_form SET fname=:fname, lname=:lname, email=:email, phone=:phone, country=:country, parish=:parish, message=:message WHERE id=:id'); //slq update the query.													
			$upldate_stmt->bindParam(':fname',$fname); // bind all parameters
			$upldate_stmt->bindParam(':lname',$lname);
		    $upldate_stmt->bindParam(':email',$email);
		    $upldate_stmt->bindParam(':phone',$phone);
			$upldate_stmt->bindParam(':country',$country);
			$upldate_stmt->bindParam(':parish',$parish);				  			
			$upldate_stmt->bindParam(':message',$message);				  			
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_lay_form.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

 ?>

<?php require_once 'layout_header.php'; ?>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
						<?php
							if(isset($errorMsg)){
						?>
							<div class="alert alert-danger">
								<strong>WRONG ! <?php echo $errorMsg; ?> </strong>
							</div>

						<?php 
							}
				 			?>			
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-3 control-label">First name</label>
								<div class="col-sm-6">
									<input type="text" name="fname" class="form-control" value=" <?php echo $fname; ?> " placeholder="enter Image">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Last name</label>
								<div class="col-sm-6">
									<input type="text" name="lname" class="form-control" value=" <?php $lname; ?> " placeholder="enter name">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"> Email</label>
								<div class="col-sm-6">
									<input type="email" name="email" class="form-control" value=" <?php echo $email; ?> " placeholder="enter Country of origine">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Phone</label>
								<div class="col-sm-6">
									<input type="phone" name="phone" class="form-control" value=" <?php echo $phone; ?> " placeholder="enter the title of your article">
								</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Country</label>
								<div class="col-sm-6">
									<input type="text" name="country" class="form-control" value=" <?php echo $country; ?> " placeholder="enter your article">
								</div>
						</div>	
						   <div class="form-group">
							  <label class="col-sm-3 control-label">Parish</label>
								<div class="col-sm-6">
									<input type="text" name="parish" class="form-control" value=" <?php  echo $parish; ?> " placeholder="enter enter the video by your Parish">
								</div>
							</div>
							<div class="form-group">
							  <label class="col-sm-3 control-label">Message</label>
								<div class="col-sm-6">
									<input type="text" name="message" class="form-control" value=" <?php  echo $message; ?> " placeholder="enter enter the video by your Parish">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_update" class="btn btn-success" value="Insert">
											<a href="read_lay_form.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>
					</div>
                </div>
            </div>->
        </div>
	</div>		
</div>
	
	<?php require 'layout_footer.php' ;?>