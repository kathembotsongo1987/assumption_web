
<?php 
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM religious_tb WHERE id =:id'); //sql select query
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
	try {
		$image_file = $_FILES["txt_file"]["name"]; 
		$type = $_FILES["txt_file"]["type"];
		$size = $_FILES["txt_file"]["size"];
		$temp = $_FILES["txt_file"]["tmp_name"];
				
		$name = $_REQUEST["name"]; // 
		$country = $_REQUEST["country"]; 
		$cty = $_REQUEST["cty"]; 
		$temp_v_date = $_REQUEST['temp_v_date']; 
		$perp_v_date = $_REQUEST['perp_v_date']; 
		$deaconate_date = $_REQUEST['deaconate_date']; 
		$priesthood_date = $_REQUEST['priesthood_date']; 
		$phone = $_REQUEST['phone']; 
		$email = $_REQUEST['email']; 
		$password = $_REQUEST['password']; 
							

		// now set the part to the store. where the image is going to be kept. Open first a new folder called upload. That is where images will be stored in your computer
				$path = "upload/".$image_file;

				if(empty($name)){
					$errorMsg = "please Enter the name";					
				} 
				else if (empty($country)) {
					$errorMsg = "please Enter the country";	
				}
				else if (empty($cty)) {
					$errorMsg = "please Enter community";	
				}
				else if (empty($temp_v_date)) {
					$errorMsg = "please Enter the date for the first vows";	
				}
				else if (empty($perp_v_date)) {
					$errorMsg = "please Enter date";	
				}
				else if (empty($deaconate_date)) {
					$errorMsg = "please Enter date";	
				}
				else if (empty($priesthood_date)) {
					$errorMsg = "please Enter date for his priesthood";	
				}
				else if (empty($phone)) {
					$errorMsg = "please Enter phone";	
				}
				else if (empty($email)) {
					$errorMsg = "please Enter Email";	
				}
				else if (empty($password)) {
					$errorMsg = "please Enter password";	
				}
				else if(empty($image_file)){
						$errorMsg = "Please Select Image";
					} 
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "upload/" .$image_file); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE religious_tb SET	image=:image, name=:name, country=:country, community=:community, temp_v_date=:temp_v_date, perp_v_date=:perp_v_date, deaconate_date=:deaconate_date, priesthood_date=:priesthood_date, phone=:phone, email=:email, password=:password WHERE id=:id'); // sql insert query
				  				
			$upldate_stmt->bindParam(':image', $image_file); // bind all parameter
			$upldate_stmt->bindParam(':name', $name);
			$upldate_stmt->bindParam(':country', $country);
			$upldate_stmt->bindParam(':community', $cty);
			$upldate_stmt->bindParam(':temp_v_date', $temp_v_date);
			$upldate_stmt->bindParam(':perp_v_date', $perp_v_date);
			$upldate_stmt->bindParam(':deaconate_date', $deaconate_date);
			$upldate_stmt->bindParam(':priesthood_date', $priesthood_date);
			$upldate_stmt->bindParam(':phone', $phone);
			$upldate_stmt->bindParam(':email', $email);
			$upldate_stmt->bindParam(':password', $password);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_religious.php");
			}
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

 ?>

<?php require 'layout_header.php' ?>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			 <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h1 style="text-align: center;">DATA MANIPULATION || RELIGIOUS</h1>
                    </div>
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
								<label class="col-sm-3 control-label">Image</label>
									<div class="col-sm-6">
										<input type="file" name="txt_file" value=" <?php echo $image ?> "	 class="form-control" placeholder="enter Image">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-6">
										<input type="name" name="name" value=" <?php echo $name; ?> " class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Country</label>
									<div class="col-sm-6">
										<input type="text" name="country" value=" <?php echo $country ?> " class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Community</label>
									<div class="col-sm-6">
										<input type="text" name="cty" value=" <?php echo $community ?> " class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for Temp vows</label>
									<div class="col-sm-6">
										<input type="text" name="temp_v_date" value=" <?php echo $temp_v_date ?> " class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for Perpetual vows</label>
									<div class="col-sm-6">
										<input type="text" name="perp_v_date" value=" <?php echo $perp_v_date ?> " class="form-control" placeholder="enter Description">
									</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for deaconate</label>
									<div class="col-sm-6">
										<input type="text" name="deaconate_date" value=" <?php echo $deaconate_date ?> " class="form-control" placeholder="enter Description">
									</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for priesthood</label>
									<div class="col-sm-6">
										<input type="text" name="priesthood_date" value=" <?php echo $priesthood_date ?> " class="form-control" placeholder="enter priesthood_date">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-6">
										<input type="text" name="phone" class="form-control" value=" <?php echo $phone ?> " placeholder="enter Phone">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
										<input type="email" name="email" class="form-control" value=" <?php echo $email ?> " placeholder="enter Email">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-6">
										<input type="text" name="password" class="form-control" value=" <?php echo $password ?> " placeholder="enter Password">
									</div>
							</div>		
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_update" class="btn btn-success" value="Update">
											<a href="read_religious.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>
		 				</div>
                    </div>
                </div>
		</div>
	</div>			
</div>

<?php require 'layout_footer.php' ?>