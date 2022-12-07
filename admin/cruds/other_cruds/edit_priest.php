

<?php require 'dbconnection.php'; ?>
<?php 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM priests WHERE id =:id'); //sql select query
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
				$diocese = $_REQUEST["diocese"]; 
				$community = $_REQUEST["community"]; 
				$temp_v = $_REQUEST["temp_v"]; 
				$perp_v = $_REQUEST["perp_v"];				
				$phone = $_REQUEST["phone"]; 
				$email = $_REQUEST["email"];
				$diaconate_date = $_REQUEST["diaconate_date"]; 
				$priesthood_date = $_REQUEST["priesthood_date"];  
				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
			$path = "upload/".$image_file;

				if(empty($name)){
					$errorMsg = "please Enter the name";					
				} 
				else if (empty($country)) {
					$errorMsg = "please Enter the country";	
				}
				else if (empty($diocese)) {
					$errorMsg = "please Enter the diocese";	
				}
				else if (empty($community)) {
					$errorMsg = "please Enter the community";	
				}
				else if (empty($temp_v)) {
					$errorMsg = "please Enter the date for temporary_vows";	
				}
				else if (empty($perp_v)) {
					$errorMsg = "please Enter the date for perpetual vows";	
				}				
				else if (empty($phone)) {
					$errorMsg = "please Enter the phone";	
				}
				else if (empty($email)) {
					$errorMsg = "please Enter the email";	
				}
				else if (empty($diaconate_date)) {
					$errorMsg = "please Enter the date for diaconate";	
				}
				else if (empty($priesthood_date)) {
					$errorMsg = "please Enter the date for priesthood_date";	
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
			$upldate_stmt = $connection->prepare('UPDATE priests SET	image=:image, name=:name, country=:country, diocese=:diocese, community=:community, temporary_vows=:temp_v, perpetual_vows=:perp_v, phone=:phone, email=:email,diaconate_date=:diaconate_date, priesthood_date=:priesthood_date WHERE id=:id'); // sql insert query
				  				
			$upldate_stmt->bindParam(':image', $image_file); // bind all parameter
			$upldate_stmt->bindParam(':name', $name);
			$upldate_stmt->bindParam(':country', $country);
			$upldate_stmt->bindParam(':diocese', $diocese);			
			$upldate_stmt->bindParam(':community', $community);			
			$upldate_stmt->bindParam(':temp_v', $temp_v);
			$upldate_stmt->bindParam(':perp_v', $perp_v);			
			$upldate_stmt->bindParam(':phone', $phone);
			$upldate_stmt->bindParam(':email', $email);
			$upldate_stmt->bindParam(':diaconate_date', $diaconate_date);
			$upldate_stmt->bindParam(':priesthood_date', $priesthood_date);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_priest.php");
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
                    	<h1 style="text-align: center;">DATA MANIPULATION || THEOLOGIANS</h1>
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
										<input type="text" name="country" value=" <?php echo $country ?> " class="form-control" placeholder="enter Country">
									</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Diocese</label>
									<div class="col-sm-6">
										<input type="text" name="diocese" value=" <?php echo $diocese ?> "	 class="form-control" placeholder="enter diocese ">
									</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Community</label>
									<div class="col-sm-6">
										<input type="text" name="community" value=" <?php echo $community ?> "	 class="form-control" placeholder="enter diocese ">
									</div>
							</div>							
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for temporary vows</label>
									<div class="col-sm-6">
										<input type="name" name="temp_v" value=" <?php echo $temporary_vows; ?> " class="form-control" placeholder="enter date for temporary vows">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for perpetual vows</label>
									<div class="col-sm-6">
										<input type="name" name="perp_v" value=" <?php echo $perpetual_vows; ?> " class="form-control" placeholder="enter date for perpetual vows">
									</div>
							</div>							
							<div class="form-group">
								<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-6">
										<input type="text" name="phone" value=" <?php echo $phone ?> " class="form-control" placeholder="enter Phone">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
										<input type="text" name="email" value=" <?php echo $email ?> " class="form-control" placeholder="enter email">
									</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for diaconate</label>
									<div class="col-sm-6">
										<input type="text" name="diaconate_date" value=" <?php echo $diaconate_date ?> "	 class="form-control" placeholder="enter parish ">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Date for priesthood</label>
									<div class="col-sm-6">
										<input type="text" name="priesthood_date" value=" <?php echo $priesthood_date ?> "	 class="form-control" placeholder="enter parish ">
									</div>
							</div>								
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_update" class="btn btn-success" value="Update">
											<a href="read_deacons.php" class="btn btn-danger">Cancel</a>
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