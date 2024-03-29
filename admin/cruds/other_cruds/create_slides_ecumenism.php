
	<?php 	
	require 'dbconnection.php';
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				

				$image = $_FILES["image"]["name"]; 
				$type = $_FILES["image"]["type"];
				$size = $_FILES["image"]["size"];
				$temp = $_FILES["image"]["tmp_name"];
				$Title = $_REQUEST['title']; 
				$Description = $_REQUEST['description']; 

				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$image;

				if(empty($Title)){
					$errorMsg = "please Enter the Title of your post";					
				} else if (empty($Description)) {
					$errorMsg = "please Enter the Description of your post";	
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
				  					move_uploaded_file($temp, "upload/" .$image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO slidesecumenism(image, title, smalltext) VALUES(:image, :title, :smalltext)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':image', $image); // bind all parameter
				  				$insert_stmt->bindParam(':title', $Title);
				  				$insert_stmt->bindParam(':smalltext', $Description);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("location:read_slides_ecumenism.php"); //refresh 3 second and redirext to the read page
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
                    <div class="panel-heading">
                        <h1 style="text-align: center;">DATA MANIPULATION || SLIDES ECUMENISM PAGE</h1>
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
									<label class="col-sm-3 control-label">Title</label>
										<div class="col-sm-6">
											<input type="text" name="title" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Description</label>
										<div class="col-sm-6">
											<input type="text" name="description" class="form-control" placeholder="enter Description">
										</div>
								</div>
	
								<div class="form-group">
									<div class="col-sm-6">
										<label class="col-sm-6 control-label">Action</label>
											<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
												<a href="read_slides_ecumenism.php" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</form>	
						</div>                            
                    </div>
                </div>
		</div>		
	</div>			
</div>

<?php require_once 'layout_footer.php'; ?>

	
