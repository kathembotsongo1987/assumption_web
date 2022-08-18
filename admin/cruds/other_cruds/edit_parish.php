

<?php require 'dbconnection.php'; ?>

<?php 
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
	try{
		$building = $_FILES["building"]["name"]; // this txt_file is the name of the input coming from the form
		$type = $_FILES["building"]["type"];
		$size = $_FILES["building"]["size"];
		$temp = $_FILES["building"]["tmp_name"];
				
		$parish_name = $_REQUEST['parish_name']; // this txt_name is the name of the input coming from the form	
		$parish_description = $_REQUEST['parish_description']; // 
		$art_title = $_REQUEST['art_title']; // 
		$art_description = $_REQUEST['art_description']; // 
				
		$parish_priest = $_FILES["parish_priest"]["name"]; // this txt_file is the name of the input coming from the form
		$typ = $_FILES["parish_priest"]["type"];
		$siz = $_FILES["parish_priest"]["size"];
		$tmp = $_FILES["parish_priest"]["tmp_name"];
				
		$video = $_REQUEST['video'];
		$contact1 = $_REQUEST['contact1'];
		$contact2 = $_REQUEST['contact2'];
		$email = $_REQUEST['email'];

		$school_teachers = $_FILES["parish_church_council"]["name"]; // this txt_file is the name of the input coming from the form
		$ty = $_FILES["parish_church_council"]["type"];
		$si = $_FILES["parish_church_council"]["size"];
		$te = $_FILES["parish_church_council"]["tmp_name"];
				
		$christians = $_FILES["christians"]["name"]; // this txt_file is the name of the input coming from the form
		$t = $_FILES["christians"]["type"];
		$s = $_FILES["christians"]["size"];
		$tm = $_FILES["christians"]["tmp_name"];				
		// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
		$path = "upload/".$building;
		$way = "upload/".$parish_priest;
		$path_w = "upload/".$parish_church_council;
		$path_way = "upload/".$christians;

		if(empty($parish_name)){
			$errorMsg = "please Enter the name of the School";					
		} 
		else if (empty($parish_description)) {
			$errorMsg = "please Enter the description of your School";	
		}
		else if (empty($art_title)) {
			$errorMsg = "please Enter the title of your article";	
		}
		else if (empty($art_description)) {
			$errorMsg = "please Enter the text for your article";	
		}
		else if (empty($contact1)) {
			$errorMsg = "please Enter the contact 1 for your parish";	
		}
		else if (empty($contact2)) {
			$errorMsg = "please Enter contact 2 for your parish";	
		}
		else if (empty($email)) {
			$errorMsg = "please Enter the email for your parish";	
		}
		else if (empty($video)) {
			$errorMsg = "please Enter any video, product of the this parish";	
		}				
		else if(empty($building)){
			$errorMsg = "Please Select building";
		} 
		else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
		{
			if(!file_exists($path)) // check file not exist in your upload folder part
				{
				  if($size < 5000000) // check file size 5MB
					{
				  		move_uploaded_file($temp, "upload/" .$building); // move upload file temperory directory to your upload foler
					} 
					else {
				  		$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  	}
				}				  			
		}
		else{
			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
		}
		if(empty($parish_priest)){
			$errorMsg = "Please Select Image Parish priest";
		} 
		else if ($typ=="image/jpg" || $typ=='image/jpeg' || $typ=='image/png' || $typ=='image/gif') // check file extension
		{
			if(!file_exists($way)) // check file not exist in your upload folder part
				{
				  if($siz < 5000000) // check file size 5MB
				  {
				  	move_uploaded_file($tmp, "upload/" .$parish_priest); // move upload file temperory directory to your upload foler
				  } 
				  else {
				  	$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  	}
				}				  			
		}
		else{
			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
		}
		if(empty($parish_church_council)){
			$errorMsg = "Please Select the church council image";
		} 
		else if ($ty=="image/jpg" || $ty=='image/jpeg' || $ty=='image/png' || $ty=='image/gif') // check file extension
			{
			if(!file_exists($path_w)) // check file not exist in your upload folder part
				{
				  if($si < 5000000) // check file size 5MB
				  	{
				  		move_uploaded_file($te, "upload/" .$parish_church_council); // move upload file temperory directory to your upload foler
				  	} else {
				  			$errorMsg = "Your File To large. Please Upload 5MB size"; // 
				  			}
				}				  			
			}
			else{
				 $errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
			}

			if(empty($christians)){
				$errorMsg = "Please the article image for Christians";
			} 
			else if ($t=="image/jpg" || $t=='image/jpeg' || $t=='image/png' || $t=='image/gif') // check file extension
			{
			if(!file_exists($path_w)) // check file not exist in your upload folder part
				{
				 	if($s < 5000000) // check file size 5MB
						{
				 		move_uploaded_file($tmp, "upload/" .$christians); // move upload file temperory directory to your upload foler
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
			$upldate_stmt = $connection->prepare('UPDATE parishes SET building=:building, parish_name=:parish_name, parish_description=:parish_description, articletitle=:articletitle, articledescription=:articledescription, parish_priest=:parish_priest, parish_church_council=:parish_church_council, video=:video, contact1=:contact1, contact2=:contact2, email=:email, christians=:christians   WHERE id=:id'); //slq update the query.													
			$upldate_stmt->bindParam(':building',$building); // bind all parameter
			$upldate_stmt->bindParam(':parish_name',$parish_name);
		    $upldate_stmt->bindParam(':parish_description',$parish_description);
		    $upldate_stmt->bindParam(':articletitle',$art_title);
			$upldate_stmt->bindParam(':articledescription',$art_description);
			$upldate_stmt->bindParam(':parish_priest',$parish_priest);
			$upldate_stmt->bindParam(':parish_church_council',$parish_church_council);
			$upldate_stmt->bindParam(':video',$video);				  			
			$upldate_stmt->bindParam(':contact1',$contact1);
			$upldate_stmt->bindParam(':contact2',$contact2);
			$upldate_stmt->bindParam(':email',$email);
			$upldate_stmt->bindParam(':christians',$christians);
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

<?php require 'layout_header.php'; ?>
<div class="wrapper">			
	<div class="col-lg-12">
		<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="color: blue; text-align: center;"> Edit Parish</h1>
                </div>
            	<div class="panel-body">
                    <div class="table-responsive">
						<form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish building</label>
									<div class="col-sm-6">
										<input type="file" name="building" class="form-control" value=" <?php echo $building; ?> " placeholder="enter Image">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish name</label>
									<div class="col-sm-6">
										<input type="text" name="parish_name" class="form-control" value=" <?php echo $parish_name; ?> " placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label"> Parish description</label>
									<div class="col-sm-6">
										<input type="text" name="parish_description" class="form-control" value=" <?php echo $parish_description; ?> " placeholder="enter Country of origine">
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
								<label class="col-sm-3 control-label">Parish Priest</label>
									<div class="col-sm-6">
										<input type="file" name="parish_priest" class="form-control" value=" <?php echo $parish_priest; ?>" placeholder="enter the image of the parish priest">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Video</label>
									<div class="col-sm-6">
										<input type="video" name="video" class="form-control" value=" <?php echo $video; ?> " placeholder="enter enter the video by your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact1 of the school</label>
									<div class="col-sm-6">
										<input type="text" name="contact1" class="form-control" value=" <?php echo $contact1; ?> " placeholder="enter the contact1 of your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact2 of the school</label>
									<div class="col-sm-6">
										<input type="text" name="contact2" class="form-control" value=" <?php echo $contact2; ?> " placeholder="enter the contact2 of your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email of the school</label>
									<div class="col-sm-6">
										<input type="email" name="email" class="form-control" value=" <?php echo $email; ?> " placeholder="enter the email of your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Christians</label>
									<div class="col-sm-6">
										<input type="file" name="christians" class="form-control" value=" <?php echo $christians; ?> " placeholder="enter the image of your article">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish Church Council</label>
									<div class="col-sm-6">
										<input type="file" name="parish_church_council" class="form-control" value=" <?php echo $parish_church_council; ?> " placeholder="enter the image of the church Council">
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
	