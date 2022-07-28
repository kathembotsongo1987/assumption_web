
<?php 
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM theologians WHERE id =:id'); //sql select query
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
				
				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
			$path = "upload/".$image_file;

				if(empty($name)){
					$errorMsg = "please Enter the name";					
				} 
				else if (empty($country)) {
					$errorMsg = "please Enter the country";	
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
			$upldate_stmt = $connection->prepare('UPDATE theologians SET	image=:image, name=:name, country=:country WHERE id=:id'); // sql insert query
				  				
			$upldate_stmt->bindParam(':image', $image_file); // bind all parameter
			$upldate_stmt->bindParam(':name', $name);
			$upldate_stmt->bindParam(':country', $country);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_theologians.php");
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
										<input type="text" name="country" value=" <?php echo $country ?> " class="form-control" placeholder="enter name">
									</div>
							</div>							
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_update" class="btn btn-success" value="Update">
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

<?php require 'layout_footer.php' ?>