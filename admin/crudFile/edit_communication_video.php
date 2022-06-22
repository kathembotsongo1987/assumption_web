
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM communication_video WHERE id =:id'); //sql select query
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
		$title1 = $_REQUEST['title1']; 
		$description1 = $_REQUEST['description1']; 
		$title2 = $_REQUEST['title2']; 
		$description2 = $_REQUEST['description2']; 
		$video = $_REQUEST['video']; 

		
			$upldate_stmt = $connection->prepare('UPDATE communication_video SET title1=:title1_up, description1=:description1_up, title2=:title2_up, description2=:description2_up, video=:video WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':title1_up',$title1);
			$upldate_stmt->bindParam(':description1_up',$description1);
			$upldate_stmt->bindParam(':title2_up',$title2); // bind all parameter
			$upldate_stmt->bindParam(':description2_up',$description2); // bind all parameter
			$upldate_stmt->bindParam(':video',$video); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_communication_video.php");//reflesh 1 second and redirect to read.php page.
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
                    <div class="panel-heading">
                        <h3><a href="create_communication_video.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
                    </div>
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
								<label class="col-sm-3 control-label">Title 1</label>
									<div class="col-sm-6">
										<input type="text" name="title1" class="form-control" value=" <?php echo $title1; ?>" required/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Description 1</label>
									<div class="col-sm-6">
										<input type="text" name="description1" class="form-control" value=" <?php echo $description1; ?>" required/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Title 2</label>
									<div class="col-sm-6">
										<input type="text" name="title2" class="form-control" value=" <?php echo $title2; ?>" required/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Description 2</label>
									<div class="col-sm-6">
										<input type="text" name="description2" class="form-control" value=" <?php echo $description2; ?>" required/>
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Video</label>
									<div class="col-sm-6">
										<input type="text" name="video" class="form-control" value=" <?php echo $video; ?>" required/>
									</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9 m-t*15">
									<input type="submit" name="btn_update" class="btn btn-primary" value="Update">
										<a href="read_communication_video.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
				 	</div>
            	</div>
        	</div>				
	</div>		
</div>
			
