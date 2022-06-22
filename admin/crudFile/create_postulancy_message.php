
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>

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
										<input type="file" name="photo1" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Description 1</label>
									<div class="col-sm-6">
										<input type="text" name="description1" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Video</label>
									<div class="col-sm-6">
										<input type="video" name="video" class="form-control">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Description video</label>
									<div class="col-sm-6">
										<input type="text" name="descriptionvideo" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">photo2</label>
									<div class="col-sm-6">
										<input type="file" name="photo2" class="form-control" placeholder="enter image">
									</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Description 2</label>
									<div class="col-sm-6">
										<input type="text" name="description2" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
											<a href="read_postulancy_message.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
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
				

				$photo1 = $_FILES["photo1"]["name"]; // this txt_file is the name of the input coming from the form
				$type = $_FILES["photo1"]["type"];
				$size = $_FILES["photo1"]["size"];
				$temp = $_FILES["photo1"]["tmp_name"];
				
				$description1 = $_REQUEST['description1']; // 
				$description2 = $_REQUEST['description2']; // 
				$descriptionvideo = $_REQUEST['descriptionvideo']; // 
				
				$photo2 = $_FILES["photo2"]["name"]; // this txt_file is the name of the input coming from the form
				$typ = $_FILES["photo2"]["type"];
				$siz = $_FILES["photo2"]["size"];
				$tmp = $_FILES["photo2"]["tmp_name"];
				
				$video = $_REQUEST['video'];
								// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "uploadformation/".$photo1;
				$way = "uploadformation/".$photo2;
				
				if(empty($photo1)){
					$errorMsg = "please Enter the photo";					
				} 
				else if (empty($description1)) {
					$errorMsg = "please Enter the description of the photo";	
				}
				else if (empty($description2)) {
					$errorMsg = "please Enter the description of the photo";	
				}
				else if (empty($descriptionvideo)) {
					$errorMsg = "please Enter the description of the video";	
				}
				
				else if (empty($video)) {
					$errorMsg = "please Enter any video";	
				}				
				
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "uploadformation/" .$photo1); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}


				if(empty($photo2)){
						$errorMsg = "Please Select Image 2";
					} 
				  	else if ($typ=="image/jpg" || $typ=='image/jpeg' || $typ=='image/png' || $typ=='image/gif') // check file extension
				  			{
				  			if(!file_exists($way)) // check file not exist in your upload folder part
				  			{
				  				if($siz < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($tmp, "uploadformation/" .$photo2); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

				  					  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO postulancy(photo1, photo2, description1, description2, descriptionvideo, video) VALUES(:photo1, :photo2, :description1, :description2, :descriptionvideo, :video)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':photo1',$photo1); // bind all parameter
				  				$insert_stmt->bindParam(':photo2',$photo2);
				  				$insert_stmt->bindParam(':description1',$description1);
				  				$insert_stmt->bindParam(':description2',$description2);
				  				$insert_stmt->bindParam(':descriptionvideo',$descriptionvideo);
				  				$insert_stmt->bindParam(':video',$video);				  			
				  								  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:3;read_postulancy_message.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>