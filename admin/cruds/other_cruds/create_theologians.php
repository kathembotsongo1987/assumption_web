
<?php require 'dbconnection.php'; ?>

	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{
				

				$image_file = $_FILES["txt_file"]["name"]; 
				$type = $_FILES["txt_file"]["type"];
				$size = $_FILES["txt_file"]["size"];
				$temp = $_FILES["txt_file"]["tmp_name"];
				
				$name = $_REQUEST["name"]; // 
				$country = $_REQUEST["country"]; 
				$diocese = $_REQUEST["diocese"]; 
				$parish = $_REQUEST['parish']; 
				
				
				// now set the part to the store. where the image is going to be kept. Open first a new folder called upload. That is where images will be stored in your computer
				$path = "upload/".$image_file;

				if(empty($name)){
					$errorMsg = "please Enter the name";					
				} 
				else if (empty($country)) {
					$errorMsg = "please Enter the country";	
				}
				else if (empty($diocese)) {
					$errorMsg = "please Enter diocese";	
				}
				else if (empty($parish)) {
					$errorMsg = "please Enter parish";	
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
				  			$insert_stmt = $connection->prepare('INSERT INTO theologians(image, name, country, diocese, parish) VALUES(:image, :name, :country, :diocese, :parish)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':image', $image_file); // bind all parameter
				  				$insert_stmt->bindParam(':name', $name);
				  				$insert_stmt->bindParam(':country', $country);
				  				$insert_stmt->bindParam(':diocese', $diocese);
				  				$insert_stmt->bindParam(':parish', $parish);
				  								  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("location:read_theologians.php"); //refresh 3 second and redirext to the read page
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
	<div class="container">			
		<div class="col-lg-12">
			<div class="panel panel-default">
                <div class="panel-heading">
                	<h1>DATA MANIPULATION || THEOLOGIANS</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Image</label>
									<div class="col-sm-6">
										<input type="file" name="txt_file" class="form-control" placeholder="enter Image">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-6">
										<input type="name" name="name" class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Country</label>
									<div class="col-sm-6">
										<input type="text" name="country" class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Diocese</label>
									<div class="col-sm-6">
										<input type="text" name="diocese" class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish</label>
									<div class="col-sm-6">
										<input type="text" name="parish" class="form-control" placeholder="enter name">
									</div>
							</div>							
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
											<a href="read_theologians.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div>
                 </div>
            </div>
        </div>				
	</div>		
</div>

<?php include('layout_footer.php'); ?>