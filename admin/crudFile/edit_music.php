
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM music WHERE id =:id'); //sql select query
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
			$artist = $_REQUEST['artist']; // 
			$video = $_REQUEST['video'];								
				
			if (empty($artist)) {
					$errorMsg = "please Enter artist";	
				}								
				else if (empty($video)) {
					$errorMsg = "please Enter videos";	
				}
				
							  	

			if(!isset($errorMsg)){
				$upldate_stmt = $connection->prepare('UPDATE music SET artist=:artist, video=:video WHERE id=:id'); 				
		    	$upldate_stmt->bindParam(':artist',$artist);
				$upldate_stmt->bindParam(':video',$video);				  			
				$upldate_stmt->bindParam(':id',$id);

				if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_music.php");//reflesh 3 second and redirect to read.php page.
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
					</div>
			
				<form method="post" class="form-horizontal" enctype="multipart/form-data">	
					<div class="form-group">
						<label class="col-sm-3 control-label">Artist</label>
							<div class="col-sm-6">
								<input type="text" name="artist" class="form-control" value=" <?php echo $artist; ?> " placeholder="enter the title of your article">
							</div>
					</div>
		
					<div class="form-group">
						<label class="col-sm-3 control-label">Video</label>
							<div class="col-sm-6">
								<input type="video" name="video" class="form-control" value=" <?php echo $video; ?> " placeholder="enter enter the video by your Parish">
							</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<label class="col-sm-6 control-label">Action</label>
								<input type="submit" name="btn_update" class="btn btn-success" value="Insert">
									<a href="read_music.php" class="btn btn-danger">Cancel</a>
						</div>
					</div>
				</form>					
			</div>
        </div>
    </div>
</div>
</div>

		