
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;">Current Philosopher</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Image</label>
										<div class="col-sm-6">
											<input type="file" name="image" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Name:</label>
										<div class="col-sm-6">
											<input type="text" name="name" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Country:</label>
										<div class="col-sm-6">
											<input type="text" name="country" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Diocese:</label>
										<div class="col-sm-6">
											<input type="text" name="diocese" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Parish:</label>
										<div class="col-sm-6">
											<input type="text" name="parish" class="form-control" placeholder="enter name">
										</div>
								</div>	
								<div class="form-group">
									<label class="col-sm-3 control-label">Class:</label>
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
</div>


	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				

				$image = $_FILES["image"]["name"]; 
				$type = $_FILES["image"]["type"];
				$size = $_FILES["image"]["size"];
				$temp = $_FILES["image"]["tmp_name"];

				$name = $_REQUEST['name']; 
				$country = $_REQUEST['country']; 
				$diocese = $_REQUEST['diocese']; 
				$parish = $_REQUEST['parish']; 
				
				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "uploadformation/".$image;

				if(empty($name)){
					$errorMsg = "please Enter the Title of your post";					
				}
				if(empty($country)){
					$errorMsg = "please Enter the Title of your post";					
				}
				if(empty($diocese)){
					$errorMsg = "please Enter the Title of your post";					
				}
				if(empty($parish)){
					$errorMsg = "please Enter the Title of your post";					
				}

				else if(empty($image)){
						$errorMsg = "Please Select Image";
					} 
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "uploadformation/" .$image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO theologians(image, name, country, diocese, parish) VALUES(:image, :name, :country, :diocese, :parish)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':image', $image); // bind all parameter
				  				$insert_stmt->bindParam(':name', $name);
				  				$insert_stmt->bindParam(':country', $country);
				  				$insert_stmt->bindParam(':diocese', $diocese);
				  				$insert_stmt->bindParam(':parish', $parish);
				  								  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;read_theologians.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>
