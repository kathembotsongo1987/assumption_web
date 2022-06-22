
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM priests WHERE id =:id'); //sql select query
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
				

				$image_file = $_FILES["txt_file"]["name"]; // this txt_file is the name of the input coming from the form
				$type = $_FILES["txt_file"]["type"];
				$size = $_FILES["txt_file"]["size"];
				$temp = $_FILES["txt_file"]["tmp_name"];
				$name = $_REQUEST['txt_name']; // this txt_name is the name of the input coming from the form	
				$country = $_REQUEST['txt_title']; // 
				$phone = $_REQUEST['txt_phone']; // 
				$email = $_REQUEST['txt_mail']; // 
				$description = $_REQUEST['txt_description']; 			
				

				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$image_file;

				if(empty($name)){
					$errorMsg = "please Enter the name";					
				} 
				else if (empty($country)) {
					$errorMsg = "please Enter the country";	
				}
				else if (empty($phone)) {
					$errorMsg = "please Enter the phone";	
				}
				else if (empty($email)) {
					$errorMsg = "please Enter email";	
				}
				else if (empty($description)) {
					$errorMsg = "please Enter the Description of your post";	
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
			$upldate_stmt = $connection->prepare('UPDATE priests SET image=:file_up, name=:name_up, country=:country_up, phone=:phone_up, email=:email_up, description=:description_up   WHERE id=:id'); //slq update the query.													
			$upldate_stmt->bindParam(':file_up',$image_file);
			$upldate_stmt->bindParam(':name_up',$name);
			$upldate_stmt->bindParam(':country_up',$country);
			$upldate_stmt->bindParam(':phone_up',$phone);
			$upldate_stmt->bindParam(':email_up',$email);
			$upldate_stmt->bindParam(':description_up',$description); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:3; read_priest.php");//reflesh 3 second and redirect to read.php page.
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
		<label class="col-sm-3 control-label">Image</label>
		<div class="col-sm-6">
				<input type="file" name="txt_file" class="form-control" value=" <?php echo $image_file; ?> " placeholder="enter Image">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Name</label>
			<div class="col-sm-6">
				<input type="name" name="txt_name" class="form-control" value="<?php echo $name; ?>" placeholder="enter name">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Country of origine</label>
			<div class="col-sm-6">
				<input type="text" name="txt_title" class="form-control" value=" <?php echo $country; ?> " placeholder="enter Country of origine">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Phone</label>
			<div class="col-sm-6">
				<input type="phone" name="txt_phone" class="form-control" value=" <?php echo $phone; ?> " placeholder="enter Phone">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Email</label>
			<div class="col-sm-6">
				<input type="email" name="txt_mail" class="form-control" value=" <?php echo $email; ?> " placeholder="enter Email">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Description</label>
		<div class="col-sm-6">
				<input type="text" name="txt_description" class="form-control" value=" <?php echo $description; ?> " placeholder="enter Description">
		</div>
	</div>
	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_update" class="btn btn-success" value="Update">
				<a href="read_priest.php" class="btn btn-danger">Cancel</a>
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