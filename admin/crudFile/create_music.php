
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>

<div class="wrapper">			
	<div class="col-lg-12">
		<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="color: blue; text-align: center;"> Create the Parish</h1>
                </div> 
            </div>                       
            <div class="panel-body">
                <div class="table-responsive">
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-3 control-label">title</label>
								<div class="col-sm-6">
									<input type="text" name="text2" class="form-control" placeholder="enter Country of origine">
								</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Artist</label>
								<div class="col-sm-6">
									<input type="text" name="artist" class="form-control" placeholder="enter the title of your article">
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
										<a href="read_music.php" class="btn btn-danger">Cancel</a>
							</div>
						</div>
					</form>
	
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
				$artist = $_REQUEST['artist']; //				 				
				$video = $_REQUEST['video'];			
								
				 if (empty($artist)) {
					$errorMsg = "please Enter artist";	
					}								
					else if (empty($video)) {
					$errorMsg = "please Enter any videos";	
					}				
				  
				if(!isset($errorMsg)){
				  	$insert_stmt = $connection->prepare('INSERT INTO music(artist, video) VALUES(:artist, :video)');				  			
				  	$insert_stmt->bindParam(':artist',$artist);		  				
				  	$insert_stmt->bindParam(':video',$video);				  			
				  				
				  	if($insert_stmt->execute()){
				  		$insertMsg="File Upload Successfully."; // execute query success message
				  		header("refresh:1;read_music.php"); //refresh 3 second and redirext to the read page
				  		}
				  	}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>