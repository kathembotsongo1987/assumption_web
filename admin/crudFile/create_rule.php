
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;">Rule of Life</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Image</label>
										<div class="col-sm-6">
											<input type="file" name="image_rule" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Title</label>
										<div class="col-sm-6">
											<input type="text" name="title_rule" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Description</label>
										<div class="col-sm-6">
											<input type="text" name="description_rule" class="form-control" placeholder="enter Description">
										</div>
								</div>
	
								<div class="form-group">
									<div class="col-sm-6">
										<label class="col-sm-6 control-label">Action</label>
											<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
												<a href="read_rule.php" class="btn btn-danger">Cancel</a>
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

				$image_rule = $_FILES["image_rule"]["name"]; 
				$type = $_FILES["image_rule"]["type"];
				$size = $_FILES["image_rule"]["size"];
				$temp = $_FILES["image_rule"]["tmp_name"];
				$Title = $_REQUEST['title_rule']; 
				$Description = $_REQUEST['description_rule']; 

				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$image_rule;

				if(empty($Title)){
					$errorMsg = "please Enter the Title of your post";					
				} else if (empty($Description)) {
					$errorMsg = "please Enter the Description of your post";	
				}
				else if(empty($image_rule)){
						$errorMsg = "Please Select Image";
					} 
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "upload/" .$image_rule); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO rule(image, title, description) VALUES(:image, :title, :description)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':image', $image_rule); // bind all parameter
				  				$insert_stmt->bindParam(':title', $Title);
				  				$insert_stmt->bindParam(':description', $Description);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;read_rule.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->