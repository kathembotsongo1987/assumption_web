
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM philosophers WHERE id =:id'); //sql select query
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
		$name = $_REQUEST['name']; 
		$country = $_REQUEST['country']; 
		$diocese = $_REQUEST['diocese'];
		$parish = $_REQUEST['parish'];
		
		$photo1 = $_FILES["photo1"]["name"];
		$type = $_FILES["photo1"]["type"];
		$size = $_FILES["photo1"]["size"];
		$temp = $_FILES["photo1"]["tmp_name"];

		
		$path="uploadformation/".$photo1; //set upload folder path
		

		if($photo1){
			if($type=='image/jpg' || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') // check file extension
			{
				if(!file_exists($path)) // check file not exist in your upload folder path
				{
					if($size < 5000000) // check file size 5MB
					{
						
						move_uploaded_file($temp, "uploadformation/".$photo1); //move upload file temporary directlry to your upload folder
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
			$photo1 = $row['photo1']; //if not select new image than previous image sam it is it.
		}

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE philosophers SET image=:image, name=:name, country=:country, diocese=:diocese, parish=:parish WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':image',$photo1);
			$upldate_stmt->bindParam(':name',$name); // bind all parameter
			$upldate_stmt->bindParam(':country',$country);
			$upldate_stmt->bindParam(':diocese',$diocese); // bind all parameter
			$upldate_stmt->bindParam(':parish',$parish); // bind all parameter			
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_philosophers.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

 ?>

<div class="wrapper">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;"> Edit Current Philosopher</h1>
                    </div>                       
                   	<div class="panel-body">
                       <div class="table-responsive">
						 <form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Image</label>
									<div class="col-sm-6">
										<input type="file" name="photo1" class="form-control" value=" <?php echo $image; ?> ">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-6">
										<input type="text" name="name" class="form-control" value=" <?php echo $name; ?> ">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Country</label>
									<div class="col-sm-6">
										<input type="text" name="country" class="form-control" value=" <?php echo $country; ?> ">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Diocese</label>
									<div class="col-sm-6">
										<input type="text" name="diocese" class="form-control" value=" <?php echo $diocese; ?> ">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Parish</label>
									<div class="col-sm-6">
										<input type="text" name="parish" class="form-control" value=" <?php echo $parish; ?> ">
									</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_update" class="btn btn-success" value="update">
											<a href="read_philosophers.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div> 
                 </div>                        
             </div>                    
         </div>				
		</div>		
	</div>
			