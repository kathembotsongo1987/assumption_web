
<?php require 'dbconnection.php'; ?>
	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
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

			$parish_church_council = $_FILES["parish_church_council"]["name"]; // this txt_file is the name of the input coming from the form
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
					$errorMsg = "please Enter the name of the parish";					
				} 
				else if (empty($parish_description)) {
					$errorMsg = "please Enter the description of your parish";	
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
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

				  	if(empty($parish_priest)){
						$errorMsg = "Please Select Image 2";
					} 
				  	else if ($typ=="image/jpg" || $typ=='image/jpeg' || $typ=='image/png' || $typ=='image/gif') // check file extension
				  		{
				  			if(!file_exists($way)) // check file not exist in your upload folder part
				  			{
				  				if($siz < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($tmp, "upload/" .$parish_priest); // move upload file temperory directory to your upload foler
				  				} else {
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
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}

				  		if(empty($christians)){
						$errorMsg = "Please the article image";
						} 
				  		else if ($t=="image/jpg" || $t=='image/jpeg' || $t=='image/png' || $t=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path_w)) // check file not exist in your upload folder part
				  			{
				  				if($s < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($tmp, "upload/" .$christians); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}			  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO parishes(building, parish_name, parish_description, articletitle, articledescription, parish_priest, parish_church_council, video, contact1, contact2, email, christians) VALUES(:building, :parish_name, :parish_description, :articletitle, :articledescription, :parish_priest, :parish_church_council, :video, :contact1, :contact2, :email, :christians)'); // sql insert query
				  				
				  			$insert_stmt->bindParam(':building',$building); // bind all parameter
				  			$insert_stmt->bindParam(':parish_name',$parish_name);
				  			$insert_stmt->bindParam(':parish_description',$parish_description);
				  			$insert_stmt->bindParam(':articletitle',$art_title);
				  			$insert_stmt->bindParam(':articledescription',$art_description);
				  			$insert_stmt->bindParam(':parish_priest',$parish_priest);
				  			$insert_stmt->bindParam(':parish_church_council',$parish_church_council);
				  			$insert_stmt->bindParam(':video',$video);				  			
				  			$insert_stmt->bindParam(':contact1',$contact1);
				  			$insert_stmt->bindParam(':contact2',$contact2);
				  			$insert_stmt->bindParam(':email',$email);
				  			$insert_stmt->bindParam(':christians',$christians);
				  				
				  			if($insert_stmt->execute()){
				  				$insertMsg="File Upload Successfully."; // execute query success message
				  				header("refresh:1;read_parish.php"); //refresh 3 second and redirext to the read page
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
                    <h1 style="color: blue; text-align: center;"> Create Parish</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish building</label>
									<div class="col-sm-6">
										<input type="file" name="building" class="form-control"placeholder="enter Image">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish name</label>
									<div class="col-sm-6">
										<input type="text" name="parish_name" class="form-control" placeholder="enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label"> Parish description</label>
									<div class="col-sm-6">
										<input type="text" name="parish_description" class="form-control" placeholder="enter Country of origine">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Article title</label>
									<div class="col-sm-6">
										<input type="text" name="art_title" class="form-control"  placeholder="enter the title of your article">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Article description</label>
									<div class="col-sm-6">
										<input type="text" name="art_description" class="form-control" placeholder="enter your article">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish Priest</label>
									<div class="col-sm-6">
										<input type="file" name="parish_priest" class="form-control" placeholder="enter the image of the parish priest">
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
								<label class="col-sm-3 control-label">Christians</label>
									<div class="col-sm-6">
										<input type="file" name="christians" class="form-control" placeholder="enter the image of your article">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Parish Church Council</label>
									<div class="col-sm-6">
										<input type="file" name="parish_church_council" class="form-control" placeholder="enter the image of the church Council">
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
	