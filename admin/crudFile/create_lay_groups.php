
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>

<div class="wrapper">	
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;"> Create the Parish</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Lay image</label>
		<div class="col-sm-6">
			<input type="file" name="lay_image" class="form-control" placeholder="enter Image">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Introduction Title</label>
			<div class="col-sm-6">
				<input type="text" name="intnro_title" class="form-control" placeholder="enter name">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label"> Introduction description</label>
			<div class="col-sm-6">
				<input type="text" name="intro_description" class="form-control" placeholder="enter Country of origine">
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
		<label class="col-sm-3 control-label">Video</label>
		<div class="col-sm-6">
				<input type="video" name="video" class="form-control" placeholder="enter enter the video by your Parish">
		</div>
	</div>

	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
				<a href="read_lay_groups.php" class="btn btn-danger">Cancel</a>
			</div>
	</div>
</form>
	
	</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
		</div>
		
	</div>
			
	</div>

</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    
           
				
		


	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{
				

				$lay_image = $_FILES["lay_image"]["name"]; // this txt_file is the name of the input coming from the form
				$type = $_FILES["lay_image"]["type"];
				$size = $_FILES["lay_image"]["size"];
				$temp = $_FILES["lay_image"]["tmp_name"];
				
				$intnro_title = $_REQUEST['intnro_title']; // this txt_name is the name of the input coming from the form	
				$intro_description = $_REQUEST['intro_description']; // 
				$art_title = $_REQUEST['art_title']; // 
				$art_description = $_REQUEST['art_description']; 				
				$video = $_REQUEST['video'];
				
				
				
				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$lay_image;
				
				if(empty($intnro_title)){
					$errorMsg = "please Enter the introduction title";					
				} 
				else if (empty($intro_description)) {
					$errorMsg = "please Enter the introduction description";	
				}
				else if (empty($art_title)) {
					$errorMsg = "please Enter the title of your article";	
				}
				else if (empty($art_description)) {
					$errorMsg = "please Enter the text for your article";	
				}
				
				else if (empty($video)) {
					$errorMsg = "please Enter any video about Ecumenism";	
				}
				
				else if(empty($lay_image)){
						$errorMsg = "Please Select ecumenism image";
					} 
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "upload/" .$lay_image); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		else{
				  			$errorMsg = "Upload JPG, GPEG, PNG & GIF File formate.... Check File extention"; // Error message file extension
				  		}


				  	

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO lay_groups(lay_image, intro_title, intro_description, articletitle, articledescription, video) VALUES(:lay_image, :intro_title, :intro_description, :articletitle, :articledescription, :video)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':lay_image',$lay_image); // bind all parameter
				  				$insert_stmt->bindParam(':intro_title',$intro_title);
				  				$insert_stmt->bindParam(':intro_description',$intro_description);
				  				$insert_stmt->bindParam(':articletitle',$art_title);
				  				$insert_stmt->bindParam(':articledescription',$art_description);
				  				$insert_stmt->bindParam(':video',$video);				  			
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;read_lay_groups.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>