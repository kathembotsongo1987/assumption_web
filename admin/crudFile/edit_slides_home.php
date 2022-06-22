
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM slides_home WHERE id =:id'); //sql select query
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
		$bigtext = $_REQUEST['bigtext']; // textbox name "txt_name"
		$smalltext = $_REQUEST['smalltext']; // textbox name "txt_name"

		$image_file = $_FILES["txt_file"]["name"];
		$type = $_FILES["txt_file"]["type"];
		$size = $_FILES["txt_file"]["size"];
		$temp = $_FILES["txt_file"]["tmp_name"];

		$path="upload/".$image_file; //set upload folder path
		$directory = "upload/"; // set upload folder parh for update time previous file remove and new file upload for next use

		if($image_file){
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
			{
				if(!file_exists($path)) // check file not exist in your upload folder path
				{
					if($size < 5000000) // check file size 5MB
					{
						unlink($directory.$row['Image']); //unlink function remore previous file
						move_uploaded_file($temp, "upload/".$image_file); //move upload file temporary directlry to your upload folder
					}
					else{
						$errorMsg = "Your File to Large please Upload 5MB size";
					}
				}
				
			}
			else{
				$errorMsg = "Upload JPG, JPEG, PNG, GIF File Formate....CHECK FILE extension"; // Error messag file extension.

			}
		}
		else{
			$image_file = $row['Image']; //if not select new image than previous image sam it is it.
		}
		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE slides_home SET bigtext=:bigtext, smalltext=:smalltext, Image=:file_up WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':bigtext',$bigtext);
			$upldate_stmt->bindParam(':smalltext',$smalltext);
			$upldate_stmt->bindParam(':file_up',$image_file); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_slides_home.php");//reflesh 3 second and redirect to read.php page.
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
                <div class="panel panel-default">                        
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
									<label class="col-sm-3 control-label">Big Text</label>
										<div class="col-sm-6">
											<input type="text" name="bigtext" class="form-control" value=" <?php echo $bigtext; ?>" required/>
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Small text</label>
										<div class="col-sm-6">
											<input type="text" name="smalltext" class="form-control" value=" <?php echo $smalltext; ?>" required/>
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Image</label>
										<div class="col-sm-6">
											<input type="file" name="txt_file" class="form-control" value=" <?php echo $Image; ?>" required/>
											<p><img src="upload/<?php echo $Image; ?>" height="100" width="100"/></p>
										</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9 m-t*15">
										<input type="submit" name="btn_update" class="btn btn-primary" value="Update">
										<a href="read_slides_home.php" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</form>	
		 				</div>                            
                      </div>                       
                    </div>                   
                </div>
            </div>			
</div>