
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>

<div class="wrapper">	
	<div class="container">
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;"> Create File</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Title 1</label>
										<div class="col-sm-6">
											<input type="text" name="title1" class="form-control" placeholder="enter title1">
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label"> Description 1</label>
										<div class="col-sm-6">
											<input type="text" name="description1" class="form-control" placeholder="enter description1">
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Title 2</label>
										<div class="col-sm-6">
											<input type="text" name="title2" class="form-control" placeholder="enter title 2">
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Description 2</label>
										<div class="col-sm-6">
											<input type="text" name="description2" class="form-control" placeholder="enter the description 2">
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
												<a href="read_slides_communication.php" class="btn btn-danger">Cancel</a>
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

	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{
				

				$title1 = $_REQUEST['title1']; // this txt_name is the name of the input coming from the form	
				$description1 = $_REQUEST['description1']; // 
				$title2 = $_REQUEST['title2']; // 
				$description2 = $_REQUEST['description2']; 			
				$video = $_REQUEST['video'];				

				
				  			$insert_stmt = $connection->prepare('INSERT INTO communication_video(title1, description1, title2, description2, video) VALUES(:title1, :title2, :description1, :description2, :video)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':title1',$title1); // bind all parameter
				  				$insert_stmt->bindParam(':description1',$description1);
				  				$insert_stmt->bindParam(':title2',$title2);
				  				$insert_stmt->bindParam(':description2',$description2);
				  				$insert_stmt->bindParam(':video',$video);				  			
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;read_communication_video.php"); //refresh 1 second and redirext to the read page
				  				}
				  		

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>