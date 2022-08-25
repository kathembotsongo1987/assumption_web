
<?php 
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM vocation WHERE id =:id'); //sql select query
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
			$file = $_FILES["file"]["name"]; 
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
			} 
			else if (empty($title)) {
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
				  			} 
				  			else {
				  				$errorMsg = "Your File To large. Please Upload 5MB size"; // error message file size not large than 5MB
				  			}
				  		}
				  			
				  	}		
		
		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE vocation SET vd_image=:vd_image, vd_name=:vd_name, title=:title, message=:message WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':vd_image',$file);
			$upldate_stmt->bindParam(':vd_name',$name);
			$upldate_stmt->bindParam(':title',$title); // bind all parameter
			$upldate_stmt->bindParam(':message',$message); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_vocation.php");//reflesh 3 second and redirect to read.php page.
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
	<div class="container">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3><a href="creat_post_H_Page.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
                    </div>
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
		                                <label class="col-sm-3 control-label">VD image</label>
		                                   <div class="col-sm-6">
				                                 <input type="file" name="file" class="form-control" value=" <?php echo $vd_image ?> " placeholder="enter name">
			                                </div>
	                                </div>
	                                <div class="form-group">
		                                 <label class="col-sm-3 control-label">VD name</label>
		                                     <div class="col-sm-6">
				                                  <input type="text" name="name" class="form-control" value=" <?php echo $vd_name ?> " placeholder="enter name">
			                                 </div>
	                                </div>
	                                <div class="form-group">
		                                 <label class="col-sm-3 control-label">Title</label>
		                                      <div class="col-sm-6">
			                                        <input type="text" name="title" class="form-control"  value=" <?php echo $title ?> " placeholder="enter Description">
		                                       </div>
	                                </div>

	                                <div class="form-group">
		                                 <label class="col-sm-3 control-label">Message</label>
		                                       <div class="col-sm-6">
			                                        <input type="text" name="message" class="form-control" value=" <?php echo $message ?> " placeholder="enter Description">
		                                       </div>
	                                </div>
	
	                                <div class="form-group">
			                             <div class="col-sm-6">
				                             <label class="col-sm-6 control-label">Action</label>
				                                 <input type="submit" name="btn_update" class="btn btn-success" value="update">
				                                      <a href="read_vocation.php" class="btn btn-danger">Cancel</a>
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