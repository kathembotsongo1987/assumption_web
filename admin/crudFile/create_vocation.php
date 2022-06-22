
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>

<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="color: blue; text-align: center;">vocation office</h1>
                </div>
          
            <div class="panel-body">
                <div class="table-responsive">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-3 control-label">VD image</label>
								<div class="col-sm-6">
									<input type="file" name="file" class="form-control" placeholder="enter name">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">VD name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" placeholder="enter name">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Title</label>
								<div class="col-sm-6">
									<input type="text" name="title" class="form-control" placeholder="enter Description">
								</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Message</label>
								<div class="col-sm-6">
									<input type="text" name="message" class="form-control" placeholder="enter Description">
								</div>
						</div>
	
						<div class="form-group">
							<div class="col-sm-6">
								<label class="col-sm-6 control-label">Action</label>
									<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
										<a href="read.vocationphp" class="btn btn-danger">Cancel</a>
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
				$file = $_FILES["file"]["name"]; // this txt_file is the name of the input coming from the form
				$type = $_FILES["file"]["type"];
				$size = $_FILES["file"]["size"];
				$temp = $_FILES["file"]["tmp_name"];
				$name = $_REQUEST['name'];	
				$title = $_REQUEST['title'];	
				$message = $_REQUEST['message'];			

				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				$path = "upload/".$file;

				if(empty($name)){
					$errorMsg = "please Enter the Name";					
				} else if (empty($title)) {
					$errorMsg = "please Enter the Title";	
				}
				else if (empty($message)) {
					$errorMsg = "please Enter the Title";	
				}
				else if(empty($file)){
						$errorMsg = "Please Select message";
					} 
				  else if ($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
				  		{
				  			if(!file_exists($path)) // check file not exist in your upload folder part
				  			{
				  				if($size < 5000000) // check file size 5MB
				  				{
				  					move_uploaded_file($temp, "upload/" .$file); // move upload file temperory directory to your upload foler
				  				} else {
				  					$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  				}
				  			}
				  			
				  		}
				  		

				if(!isset($errorMsg)){
				 	$insert_stmt = $connection->prepare('INSERT INTO vocation(vd_image, vd_name, title, message) VALUES(:vd_image, :vd_name, :title, :message)'); // sql insert query				  				
				  	$insert_stmt->bindParam(':vd_image', $file); // bind all parameter
				  	$insert_stmt->bindParam(':vd_name', $name);
				  	$insert_stmt->bindParam(':title', $title);
				  	$insert_stmt->bindParam(':message', $message);
				  				
				  	if($insert_stmt->execute()){
				  		$insertMsg="File Upload Successfully."; // execute query success message
				  		header("refresh:1;read_vocation.php"); //refresh 3 second and redirext to the read page
				  		}
				  	}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

