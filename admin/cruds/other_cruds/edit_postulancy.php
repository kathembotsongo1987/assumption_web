
<?php 
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM postulancy WHERE id =:id'); //sql select query
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
		$description1 = $_REQUEST['description1']; 
		$description2 = $_REQUEST['description2']; 
		$descriptionvideo = $_REQUEST['descriptionvideo'];
		$video = $_REQUEST['video'];
		
		$photo1 = $_FILES["photo1"]["name"];
		$type = $_FILES["photo1"]["type"];
		$size = $_FILES["photo1"]["size"];
		$temp = $_FILES["photo1"]["tmp_name"];

		$photo2 = $_FILES["photo2"]["name"];
		$typ = $_FILES["photo2"]["type"];
		$siz = $_FILES["photo2"]["size"];
		$tem = $_FILES["photo2"]["tmp_name"];

		$path="upload/".$photo1; //set upload folder path
		$way="upload/".$photo2; //set upload folder path
		

		if($photo1 || $photo2){
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
			{
				if(!file_exists($path)) // check file not exist in your upload folder path
				{
					if($size < 5000000) // check file size 5MB
					{
						
						move_uploaded_file($temp, "upload/".$photo1);
						move_uploaded_file($tem, "upload/".$photo2); //move upload file temporary directlry to your upload folder
					}
					else{
						$errorMsg = "Your File to Large please Upload 5MB size";
					}
				}
			
			}
			else{
				$errorMsg = "Upload JPG, JPEG, PNG, GIF File Formate....CHECK FILE extension"; // Error messag file extension.

			}
		}
		else{
			$photo1 = $row['photo1']; //if not select new image than previous image sam it is it.
		}

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE postulancy SET photo1=:photo1, photo2=:photo2, description1=:description1, description2=:description2, descriptionvideo=:descriptionvideo, video=:video WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':photo1',$photo1);
			$upldate_stmt->bindParam(':photo2',$photo2);
			$upldate_stmt->bindParam(':description1',$description1); // bind all parameter
			$upldate_stmt->bindParam(':description2',$description2); // bind all parameter
			$upldate_stmt->bindParam(':descriptionvideo',$descriptionvideo); // bind all parameter
			$upldate_stmt->bindParam(':video',$video); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_postulancy.php");//reflesh 3 second and redirect to read.php page.
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
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;"> Create the Message</h1>
                    </div>                       
                   	<div class="panel-body">
                       <div class="table-responsive">
						 <form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Photo1</label>
									<div class="col-sm-6">
										<input type="file" name="photo1" class="form-control" value=" <?php echo $photo1; ?> ">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Description 1</label>
									<div class="col-sm-6">
										<input type="text" name="description1" class="form-control" value=" <?php echo $description1; ?> ">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Video</label>
									<div class="col-sm-6">
										<input type="video" name="video" class="form-control" value=" <?php echo $video; ?> ">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Description video</label>
									<div class="col-sm-6">
										<input type="text" name="descriptionvideo" class="form-control" value=" <?php echo $descriptionvideo; ?> ">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">photo2</label>
									<div class="col-sm-6">
										<input type="file" name="photo2" class="form-control" value=" <?php echo $photo2; ?> ">
									</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Description 2</label>
									<div class="col-sm-6">
										<input type="text" name="description2" class="form-control" value=" <?php echo $description2; ?> ">				
									</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_update" class="btn btn-success" value="update">
											<a href="read_postulancy.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div> 
                 </div>                        
             </div>                    
         </div>				
		</div>		
	</div>
			