


<?php require 'dbconnection.php'; ?>
	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				

				$image_file = $_FILES["txt_file"]["name"]; // this txt_file is the name of the input coming from the form
				$type = $_FILES["txt_file"]["type"];
				$size = $_FILES["txt_file"]["size"];
				$temp = $_FILES["txt_file"]["tmp_name"];
				$Title = $_REQUEST['txt_title']; // this txt_name is the name of the input coming from the form	
				$Description = $_REQUEST['txt_description']; // this txt_name is the name of the input coming from the form	
				

				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$image_file;

				if(empty($Title)){
					$errorMsg = "please Enter the Title of your post";					
				} else if (empty($Description)) {
					$errorMsg = "please Enter the Description of your post";	
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
				  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO triplelove(image, title, description) VALUES(:image, :title, :description)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':image', $image_file); // bind all parameter
				  				$insert_stmt->bindParam(':title', $Title);
				  				$insert_stmt->bindParam(':description', $Description);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("location:read_triplelove.php"); //refresh 3 second and redirext to the read page
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
                        <h1 style="color: blue; text-align: center;">DATA MANIPULATION // TRIPLE LOVE POST</h1>
                    </div>
                <div class="panel-body">
                	<div class="table-responsive">
                		<form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Image</label>
									<div class="col-sm-6">
										<input type="file" name="txt_file" class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Title</label>
									<div class="col-sm-6">
										<input type="text" name="txt_title" class="form-control" placeholder="enter name">
									</div>
							</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Description</label>
										<div class="col-sm-6">
											<input type="text" name="txt_description" class="form-control" placeholder="enter Description">
										</div>
								</div>	
								<div class="form-group">
									<div class="col-sm-6">
										<label class="col-sm-6 control-label">Action</label>
											<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
												<a href="read_triple_love.php" class="btn btn-danger">Cancel</a>
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