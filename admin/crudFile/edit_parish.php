
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM parishes WHERE id =:id'); //sql select query
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
				

				$ch_image = $_FILES["ch_image"]["name"]; // this txt_file is the name of the input coming from the form
				$type = $_FILES["ch_image"]["type"];
				$size = $_FILES["ch_image"]["size"];
				$temp = $_FILES["ch_image"]["tmp_name"];
				
				$ch_name = $_REQUEST['ch_name']; // this txt_name is the name of the input coming from the form	
				$ch_description = $_REQUEST['ch_description']; // 
				$art_title = $_REQUEST['art_title']; // 
				$art_description = $_REQUEST['art_description']; // 
				
				$priest_image = $_FILES["priest_image"]["name"]; // this txt_file is the name of the input coming from the form
				$typ = $_FILES["priest_image"]["type"];
				$siz = $_FILES["priest_image"]["size"];
				$tmp = $_FILES["priest_image"]["tmp_name"];
				
				$video = $_REQUEST['video'];
				$contact1 = $_REQUEST['contact1'];
				$contact2 = $_REQUEST['contact2'];
				$email = $_REQUEST['email'];

				$ch_council = $_FILES["ch_council"]["name"]; // this txt_file is the name of the input coming from the form
				$ty = $_FILES["ch_council"]["type"];
				$si = $_FILES["ch_council"]["size"];
				$te = $_FILES["ch_council"]["tmp_name"];
				
				$art_image = $_FILES["art_image"]["name"]; // this txt_file is the name of the input coming from the form
				$t = $_FILES["art_image"]["type"];
				$s = $_FILES["art_image"]["size"];
				$tm = $_FILES["art_image"]["tmp_name"];
				
				
				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$ch_image;
				$way = "upload/".$priest_image;
				$path_w = "upload/".$ch_council;
				$path_way = "upload/".$art_image;


				if(empty($ch_name)){
					$errorMsg = "please Enter the name of the Parish";					
				} 
				else if (empty($ch_description)) {
					$errorMsg = "please Enter the description of your Parish";	
				}
				else if (empty($art_title)) {
					$errorMsg = "please Enter the title of your article";	
				}
				else if (empty($art_description)) {
					$errorMsg = "please Enter the text for your article";	
				}
				else if (empty($contact1)) {
					$errorMsg = "please Enter the contact 1 for your Parish";	
				}
				else if (empty($contact2)) {
					$errorMsg = "please Enter the contact 2 for your Parish";	
				}
				else if (empty($email)) {
					$errorMsg = "please Enter the Email for your Parish";	
				}
				else if (empty($video)) {
					$errorMsg = "please Enter any video, product of the this Parish";	
				}
				
				else if(empty($ch_image)){
						$errorMsg = "Please Select ch_image";
					} 
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "upload/" .$ch_image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}


				  	if(empty($priest_image)){
						$errorMsg = "Please Select Image 2";
					} 
				  	else if ($typ=="image/jpg" || $typ=='image/jpeg' || $typ=='image/png' || $typ=='image/gif') // check file extension
				  		{
				  			if(!file_exists($way)) // check file not exist in your upload folder part
				  			{
				  				if($siz < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($tmp, "upload/" .$priest_image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

				  		if(empty($ch_council)){
						$errorMsg = "Please Select the church council image";
						} 
				  		else if ($ty=="image/jpg" || $ty=='image/jpeg' || $ty=='image/png' || $ty=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path_w)) // check file not exist in your upload folder part
				  			{
				  				if($si < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($te, "upload/" .$ch_council); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

				  		if(empty($art_image)){
						$errorMsg = "Please the article image";
						} 
				  		else if ($t=="image/jpg" || $t=='image/jpeg' || $t=='image/png' || $t=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path_w)) // check file not exist in your upload folder part
				  			{
				  				if($s < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($tmp, "upload/" .$art_image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE parishes SET church_image=:church_image, church_name=:church_name, church_description=:church_description, articletitle=:articletitle, articledescription=:articledescription, p_priest=:p_priest, church_council=:church_council, video=:video, contact1=:contact1, contact2=:contact2, email=:email, art_image=:art_image   WHERE id=:id'); //slq update the query.													
			$upldate_stmt->bindParam(':church_image',$ch_image); // bind all parameter
			$upldate_stmt->bindParam(':church_name',$ch_name);
		    $upldate_stmt->bindParam(':church_description',$ch_description);
		    $upldate_stmt->bindParam(':articletitle',$art_title);
			$upldate_stmt->bindParam(':articledescription',$art_description);
			$upldate_stmt->bindParam(':p_priest',$priest_image);
			$upldate_stmt->bindParam(':church_council',$ch_council);
			$upldate_stmt->bindParam(':video',$video);				  			
			$upldate_stmt->bindParam(':contact1',$contact1);
			$upldate_stmt->bindParam(':contact2',$contact2);
			$upldate_stmt->bindParam(':email',$email);
			$upldate_stmt->bindParam(':art_image',$art_image);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:3; read_parish.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

 ?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                                            <!-- /.panel-heading -->
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
										<label class="col-sm-3 control-label">Church image</label>
											<div class="col-sm-6">
												<input type="file" name="ch_image" class="form-control" placeholder="enter Image" value=" <?php echo $ch_image; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Church name</label>
											<div class="col-sm-6">
												<input type="text" name="ch_name" class="form-control" placeholder="enter name" value=" <?php echo $church_name; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label"> Church description</label>
											<div class="col-sm-6">
												<input type="text" name="ch_description" class="form-control" placeholder="enter Country of origine" value=" <?php echo $church_description; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Article title</label>
											<div class="col-sm-6">
												<input type="text" name="art_title" class="form-control" placeholder="enter the title of your article" value=" <?php echo $articletitle; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Article description</label>
											<div class="col-sm-6">
												<input type="text" name="art_description" class="form-control" placeholder="enter your article" value=" <?php echo $articledescription; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Parish Priest image</label>
											<div class="col-sm-6">
												<input type="file" name="priest_image" class="form-control" placeholder="enter the image of the parish priest" value=" <?php echo $p_priest; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Video</label>
											<div class="col-sm-6">
												<input type="video" name="video" class="form-control" placeholder="enter enter the video by your Parish" value=" <?php echo $video; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Contact 1  of the Parish</label>
											<div class="col-sm-6">
												<input type="text" name="contact1" class="form-control" placeholder="enter the contact of your Parish" value=" <?php echo $contact1; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Contact 2 of the Parish</label>
											<div class="col-sm-6">
												<input type="text" name="contact2" class="form-control" placeholder="enter the contact of your Parish" value=" <?php echo $contact2; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Email of the Parish</label>
											<div class="col-sm-6">
												<input type="text" name="email" class="form-control" placeholder="enter the contact of your Parish" value=" <?php echo $email; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Article image</label>
											<div class="col-sm-6">
												<input type="file" name="art_image" class="form-control" placeholder="enter the image of your article" value=" <?php echo $art_image; ?> ">
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Church Council</label>
											<div class="col-sm-6">
												<input type="file" name="ch_council" class="form-control" placeholder="enter the image of the church Council" value=" <?php echo $church_name; ?> ">
											</div>
									</div>

									<div class="form-group">
										<div class="col-sm-6">
											<label class="col-sm-6 control-label">Action</label>
												<input type="submit" name="btn_update" class="btn btn-success" value="update">
													<a href="read_parish.php" class="btn btn-danger">Cancel</a>
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