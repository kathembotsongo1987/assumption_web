
<?php require 'dbconnection.php'; ?>

	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try{
				$photo1 = $_FILES["photo1"]["name"]; // this txt_file is the name of the input coming from the form
				$type = $_FILES["photo1"]["type"];
				$size = $_FILES["photo1"]["size"];
				$temp = $_FILES["photo1"]["tmp_name"];
				
				$description1 = $_REQUEST['description1']; // 
				$description2 = $_REQUEST['description2'];	
				$photo2 = $_FILES["photo2"]["name"];
				$typ = $_FILES["photo2"]["type"];
				$siz = $_FILES["photo2"]["size"];
				$tmp = $_FILES["photo2"]["tmp_name"];
				
				$article = $_REQUEST['article'];
								// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$photo1;
				$way = "upload/".$photo2;
				
				if(empty($photo1)){
					$errorMsg = "please Enter the photo";					
				} 
				else if (empty($description1)) {
					$errorMsg = "please Enter the description of the photo";	
				}
				else if (empty($description2)) {
					$errorMsg = "please Enter the description of the photo";	
				}
								
				else if (empty($article)) {
					$errorMsg = "please Enter any video";	
				}				
				
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "upload/" .$photo1); // move upload file temperory directory to your upload foler
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
				  					move_uploaded_file($tmp, "upload/" .$photo2); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

				  					  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO post_philosophy_infor(photo1, photo2, description1, description2, article) VALUES(:photo1, :photo2, :description1, :description2, :article)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':photo1',$photo1); // bind all parameter
				  				$insert_stmt->bindParam(':photo2',$photo2);
				  				$insert_stmt->bindParam(':description1',$description1);
				  				$insert_stmt->bindParam(':description2',$description2);
				  				$insert_stmt->bindParam(':article',$article);				  			
				  								  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("location:read_post_philosophy_infor.php"); //refresh 3 second and redirext to the read page
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
                        <h1 style="text-align: center;">DATA MANIPULATION || POST PHILOSPHY NEWS</h1>
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
								<label class="col-sm-3 control-label">Article</label>
									<div class="col-sm-6">
										<input type="text" name="article" class="form-control">
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
											<a href="read_post_philosophy_infor.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div> 
                 </div>                        
             </div>                    
         </div>				
		</div>		
	</div>
			