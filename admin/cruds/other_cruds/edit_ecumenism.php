
<?php require_once 'dbconnection.php';?>

<?php  
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM ecumenism WHERE id =:id'); //sql select query
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
		$ec_image = $_FILES["ec_image"]["name"]; 
		$type = $_FILES["ec_image"]["type"];
		$size = $_FILES["ec_image"]["size"];
		$temp = $_FILES["ec_image"]["tmp_name"];
				
		$intro_title = $_REQUEST['intro_title']; 
		$intro_description = $_REQUEST['intro_description']; // 
		$art_title = $_REQUEST['art_title']; // 
		$art_description = $_REQUEST['art_description']; // 
				
		$video = $_REQUEST['video'];
								
		// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
		$path = "upload/".$ec_image;
				
		if(empty($intro_title)){
			$errorMsg = "please Enter the name of the Parish";					
		} 
		else if (empty($intro_description)) {
			$errorMsg = "please Enter the description of your Parish";	
		}
		else if (empty($art_title)) {
			$errorMsg = "please Enter the title of your article";	
		}
		else if (empty($art_description)) {
			$errorMsg = "please Enter the text for your article";	
		}				
		else if (empty($video)) {
			$errorMsg = "please Enter any video, product of the this Parish";	
		}				
		else if(empty($ec_image)){
			$errorMsg = "Please Select ch_image";
		} 
		else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
			{
		
if(!file_exists($path)) // check file not exist in your upload folder part
	{
	if($size < 5000000) // check file size 5MB
		{
		move_uploaded_file($temp, "upload/" .$ec_image); // move upload file temperory directory to your upload foler
		} 
		else {
			 $errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
			}
		}
				  			
	}
	else{
		$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
}
				  	

if(!isset($errorMsg)){
	$upldate_stmt = $connection->prepare('UPDATE ecumenism SET ecumenism_image=:ecumenism_image, intro_title=:intro_title, intro_description=:intro_description, articletitle=:articletitle, articledescription=:articledescription, video=:video WHERE id=:id'); //slq update the query.													
	$upldate_stmt->bindParam(':ecumenism_image',$ec_image); // bind all parameter
	$upldate_stmt->bindParam(':intro_title',$intro_title);
	$upldate_stmt->bindParam(':intro_description',$intro_description);
	$upldate_stmt->bindParam(':articletitle',$art_title);
	$upldate_stmt->bindParam(':articledescription',$art_description);
	$upldate_stmt->bindParam(':video',$video);				  			
	$upldate_stmt->bindParam(':id',$id);

	if($upldate_stmt->execute()){
		$updateMsg = "File Uplade Successfully....."; // File update success message
		header("refresh:1; read_ecumenism.php");//reflesh 3 second and redirect to read.php page.
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
										<label class="col-sm-3 control-label">Ecumenism image</label>
											<div class="col-sm-6">
												<input type="file" name="ec_image" class="form-control" value=" <?php echo $ecumenism_image; ?> " placeholder="enter Image">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Introduction Title</label>
											<div class="col-sm-6">
												<input type="text" name="intro_title" class="form-control" value=" <?php $intro_title; ?> " placeholder="enter name">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label"> Introduction description</label>
											<div class="col-sm-6">
												<input type="text" name="intro_description" class="form-control" value=" <?php echo $intro_description; ?> " placeholder="enter Country of origine">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Article title</label>
											<div class="col-sm-6">
												<input type="text" name="art_title" class="form-control" value=" <?php echo $articletitle; ?> " placeholder="enter the title of your article">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Article description</label>
											<div class="col-sm-6">
												<input type="text" name="art_description" class="form-control" value=" <?php echo $articledescription; ?> " placeholder="enter your article">
											</div>
									</div>
	
									<div class="form-group">
										<label class="col-sm-3 control-label">Video</label>
											<div class="col-sm-6">
												<input type="video" name="video" class="form-control" value=" <?php  echo $video; ?> " placeholder="enter enter the video by your Parish">
											</div>
									</div>

									<div class="form-group">
										<div class="col-sm-6">
											<label class="col-sm-6 control-label">Action</label>
												<input type="submit" name="btn_update" class="btn btn-success" value="Insert">
													<a href="read_ecumenism.php" class="btn btn-danger">Cancel</a>
										</div>
									</div>
								</form>	
					</div>
                </div>
            </div>
        </div>
	</div>
</div>
			
	