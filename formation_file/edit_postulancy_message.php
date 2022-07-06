
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM postulancy WHERE id =:id'); //sql select query
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
	
		$photo1 = $_REQUEST['photo1'];
		$photo2 = $_REQUEST['photo2'];
		$description1 = $_REQUEST['description1'];
		$description2 = $_REQUEST['description2'];
		$video = $_REQUEST['video'];
		$descriptionvideo = $_REQUEST['descriptionvideo'];
		$description2 = $_REQUEST['description2'];
		
		$upldate_stmt = $connection->prepare('UPDATE postulancy SET photo1=:photo1, photo2=:photo2, description1=:description1, description2=:description2, descriptionvideo=:descriptionvideo, video=:video WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':photo1',$photo1);
			$upldate_stmt->bindParam(':photo2',$photo2);
			$upldate_stmt->bindParam(':description1',$description1);
			$upldate_stmt->bindParam(':description2',$description2);
			$upldate_stmt->bindParam(':descriptionvideo',$descriptionvideo);
			$upldate_stmt->bindParam(':video',$video);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Upladed Successfully....."; // File update success message
				header("refresh:3; read_country.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	
	
 ?>

<div class="wrapper">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;"> Create the Message</h1>
                    </div>                       
                   	<div class="panel-body">
                       <div class="table-responsive">
						 <form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Photo1</label>
									<div class="col-sm-6">
										<input type="file" name="photo1" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Description 1</label>
									<div class="col-sm-6">
										<input type="text" name="description1" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Video</label>
									<div class="col-sm-6">
										<input type="video" name="video" class="form-control">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Description video</label>
									<div class="col-sm-6">
										<input type="text" name="descriptionvideo" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">photo2</label>
									<div class="col-sm-6">
										<input type="file" name="photo2" class="form-control" placeholder="enter image">
									</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Description 2</label>
									<div class="col-sm-6">
										<input type="text" name="description2" class="form-control" placeholder="enter Image">				
									</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
											<a href="read_postulancy_message.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div> 
                 </div>                        
             </div>                    
         </div>				
		</div>		
	</div>
			