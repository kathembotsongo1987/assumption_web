
	<?php 	
	require 'dbconnection.php';
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				

				$video = $_REQUEST["video"]; 
				$Title = $_REQUEST['title']; 
				$Description = $_REQUEST['description']; 

				if(empty($video)){
					$errorMsg = "please Enter the video";					
				}else if(empty($Title)){
					$errorMsg = "please Enter the Title of your post";					
				} else if (empty($Description)) {
					$errorMsg = "please Enter the Description of your post";	
				}
				 		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO slides_orders(video, title, smalltext) VALUES(:video, :title, :smalltext)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':video', $video); // bind all parameter
				  				$insert_stmt->bindParam(':title', $Title);
				  				$insert_stmt->bindParam(':smalltext', $Description);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("location:read_slides_orders.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

<?php require_once 'layout_header.php'; ?>

<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="text-align: center;">DATA MANIPULATION || SLIDES ORDERS PAGE</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Video</label>
										<div class="col-sm-6">
											<input type="video" name="video" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Title</label>
										<div class="col-sm-6">
											<input type="text" name="title" class="form-control" placeholder="enter name">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Description</label>
										<div class="col-sm-6">
											<input type="text" name="description" class="form-control" placeholder="enter Description">
										</div>
								</div>
	
								<div class="form-group">
									<div class="col-sm-6">
										<label class="col-sm-6 control-label">Action</label>
											<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
												<a href="read_slides_orders.php" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</form>	
						</div>                            
                    </div>
                </div>
		</div>		
	</div>			
</div>

<?php require_once 'layout_footer.php'; ?>

	
