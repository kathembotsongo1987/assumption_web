
<?php require 'dbconnection.php'; ?>
	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
		try{
			$sch_image = $_FILES["sch_image"]["name"]; // this txt_file is the name of the input coming from the form
			$type = $_FILES["sch_image"]["type"];
			$size = $_FILES["sch_image"]["size"];
			$temp = $_FILES["sch_image"]["tmp_name"];
				
			$sch_name = $_REQUEST['sch_name']; // this txt_name is the name of the input coming from the form	
			$sch_description = $_REQUEST['sch_description']; // 
			$art_title = $_REQUEST['art_title']; // 
			$art_description = $_REQUEST['art_description']; // 
				
			$chaplain_image = $_FILES["chaplain_image"]["name"]; // this txt_file is the name of the input coming from the form
			$typ = $_FILES["chaplain_image"]["type"];
			$siz = $_FILES["chaplain_image"]["size"];
			$tmp = $_FILES["chaplain_image"]["tmp_name"];
				
			$video = $_REQUEST['video'];
			$contact1 = $_REQUEST['contact1'];
			$contact2 = $_REQUEST['contact2'];
			$email = $_REQUEST['email'];

			$school_teachers = $_FILES["sch_council"]["name"]; // this txt_file is the name of the input coming from the form
			$ty = $_FILES["sch_council"]["type"];
			$si = $_FILES["sch_council"]["size"];
			$te = $_FILES["sch_council"]["tmp_name"];
				
			$art_image = $_FILES["art_image"]["name"]; // this txt_file is the name of the input coming from the form
			$t = $_FILES["art_image"]["type"];
			$s = $_FILES["art_image"]["size"];
			$tm = $_FILES["art_image"]["tmp_name"];				
				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
			$path = "upload/".$sch_image;
			$way = "upload/".$chaplain_image;
			$path_w = "upload/".$school_teachers;
			$path_way = "upload/".$art_image;

			if(empty($sch_name)){
					$errorMsg = "please Enter the name of the school";					
				} 
				else if (empty($sch_description)) {
					$errorMsg = "please Enter the description of your school";	
				}
				else if (empty($art_title)) {
					$errorMsg = "please Enter the title of your article";	
				}
				else if (empty($art_description)) {
					$errorMsg = "please Enter the text for your article";	
				}
				else if (empty($contact1)) {
					$errorMsg = "please Enter the contact 1 for your school";	
				}
				else if (empty($contact2)) {
					$errorMsg = "please Enter contact 2 for your school";	
				}
				else if (empty($email)) {
					$errorMsg = "please Enter the email for your school";	
				}
				else if (empty($video)) {
					$errorMsg = "please Enter any video, product of the this school";	
				}				
				else if(empty($sch_image)){
						$errorMsg = "Please Select sch_image";
					} 
				else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  		if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  			if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "upload/" .$sch_image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

				  	if(empty($chaplain_image)){
						$errorMsg = "Please Select Image 2";
					} 
				  	else if ($typ=="image/jpg" || $typ=='image/jpeg' || $typ=='image/png' || $typ=='image/gif') // check file extension
				  		{
				  			if(!file_exists($way)) // check file not exist in your upload folder part
				  			{
				  				if($siz < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($tmp, "upload/" .$chaplain_image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}
				  		if(empty($school_teachers)){
						$errorMsg = "Please Select the church council image";
						} 
				  		else if ($ty=="image/jpg" || $ty=='image/jpeg' || $ty=='image/png' || $ty=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path_w)) // check file not exist in your upload folder part
				  			{
				  				if($si < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($te, "upload/" .$school_teachers); // move upload file temperory directory to your upload foler
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
				  			$insert_stmt = $connection->prepare('INSERT INTO schools(school_image, school_name, school_description, articletitle, articledescription, school_chaplain, school_teachers, video, contact1, contact2, email, art_image) VALUES(:school_image, :school_name, :school_description, :articletitle, :articledescription, :school_chaplain, :school_teachers, :video, :contact1, :contact2, :email, :art_image)'); // sql insert query
				  				
				  			$insert_stmt->bindParam(':school_image',$sch_image); // bind all parameter
				  			$insert_stmt->bindParam(':school_name',$sch_name);
				  			$insert_stmt->bindParam(':school_description',$sch_description);
				  			$insert_stmt->bindParam(':articletitle',$art_title);
				  			$insert_stmt->bindParam(':articledescription',$art_description);
				  			$insert_stmt->bindParam(':school_chaplain',$chaplain_image);
				  			$insert_stmt->bindParam(':school_teachers',$school_teachers);
				  			$insert_stmt->bindParam(':video',$video);				  			
				  			$insert_stmt->bindParam(':contact1',$contact1);
				  			$insert_stmt->bindParam(':contact2',$contact2);
				  			$insert_stmt->bindParam(':email',$email);
				  			$insert_stmt->bindParam(':art_image',$art_image);
				  				
				  			if($insert_stmt->execute()){
				  				$insertMsg="File Upload Successfully."; // execute query success message
				  				header("refresh:1;read_school.php"); //refresh 3 second and redirext to the read page
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="color: blue; text-align: center;"> Create school</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">School image</label>
									<div class="col-sm-6">
										<input type="file" name="sch_image" class="form-control" placeholder="enter Image">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">School name</label>
									<div class="col-sm-6">
										<input type="text" name="sch_name" class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label"> School description</label>
									<div class="col-sm-6">
										<input type="text" name="sch_description" class="form-control" placeholder="enter Country of origine">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Article title</label>
									<div class="col-sm-6">
										<input type="text" name="art_title" class="form-control" placeholder="enter the title of your article">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Article description</label>
									<div class="col-sm-6">
										<input type="text" name="art_description" class="form-control" placeholder="enter your article">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">School chaplain</label>
									<div class="col-sm-6">
										<input type="file" name="chaplain_image" class="form-control" placeholder="enter the image of the parish priest">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Video</label>
									<div class="col-sm-6">
										<input type="video" name="video" class="form-control" placeholder="enter enter the video by your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact1 of the school</label>
									<div class="col-sm-6">
										<input type="text" name="contact1" class="form-control" placeholder="enter the contact1 of your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Contact2 of the school</label>
									<div class="col-sm-6">
										<input type="text" name="contact2" class="form-control" placeholder="enter the contact2 of your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Email of the school</label>
									<div class="col-sm-6">
										<input type="email" name="email" class="form-control" placeholder="enter the email of your Parish">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Article image</label>
									<div class="col-sm-6">
										<input type="file" name="art_image" class="form-control" placeholder="enter the image of your article">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">School Teachers</label>
									<div class="col-sm-6">
										<input type="file" name="sch_council" class="form-control" placeholder="enter the image of the church Council">
									</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
										<a href="read_parish.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div>
                </div>
            </div>
        </div>
	</div>
	