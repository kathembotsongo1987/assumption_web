
<?php 
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM slideshome WHERE id =:id'); //sql select query
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
				  					move_uploaded_file($temp, "upload/" .$image_rule); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		
		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE slideshome SET title=:title_up, smalltext=:description_up, image=:file_up WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':title_up',$Title);
			$upldate_stmt->bindParam(':description_up',$Description);
			$upldate_stmt->bindParam(':file_up',$image); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_slides_home.php");//reflesh 3 second and redirect to read.php page.
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
                    	<h1 style="text-align: center;">DATA MANIPULATION || SLIDES HOME PAGE</h1>
                        <h3><a href="create_slides_home.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
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
										<label class="col-sm-3 control-label">Title</label>
											<div class="col-sm-6">
												<input type="text" name="title" class="form-control" value=" <?php echo $title; ?>" required/>
											</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Description</label>
											<div class="col-sm-6">
												<input type="text" name="description" class="form-control" value=" <?php echo $smalltext; ?>" required/>
											</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Image</label>
											<div class="col-sm-6">
												<input type="file" name="image" class="form-control" value=" <?php echo $image; ?>" required/>
													<p><img src="upload/<?php echo $image; ?>" height="100" width="100"/></p>
											</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9 m-t*15">
											<input type="submit" name="btn_update" class="btn btn-primary" value="Update">
												<a href="read_slideshome.php" class="btn btn-danger">Cancel</a>
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