
<?php  
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM communities WHERE id =:id'); //sql select query
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
		$diocese = $_REQUEST['diocese'];
		$country = $_REQUEST['country'];
				
		if(empty($name)){
			$errorMsg = "please Enter the name";					
		} else if (empty($diocese)) {
			$errorMsg = "please Enter the diocese";	
		}
		else if (empty($country)) {
			$errorMsg = "please Enter the country";	
		}				
				  		
		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE communities SET name=:name_up, diocese=:diocese_up, country=:country WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':name_up',$name);
			$upldate_stmt->bindParam(':diocese_up',$diocese);
			$upldate_stmt->bindParam(':country',$country);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_cties.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

 ?>
<?php 	require_once 'layout_header.php'; ?>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">			
            <div class="panel panel-default">
            	<div class="panel-heading">
                    <h1 style="text-align: center;">DATA MANIPULATION || COMMUNITIES OF KENYA</h1>
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
										<label class="col-sm-3 control-label">Name</label>
											<div class="col-sm-6">
												<input type="text" name="name" class="form-control" value=" <?php echo $name; ?> " >
											</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Diocese</label>
											<div class="col-sm-6">
												<input type="name" name="diocese" class="form-control" value="<?php echo $diocese; ?>" >
											</div>
									</div>						
									<div class="form-group">
										<div class="col-sm-6">
											<label class="col-sm-6 control-label">Action</label>
												<input type="submit" name="btn_update" class="btn btn-success" value="Update">
													<a href="read_cty_kenya.php" class="btn btn-danger">Cancel</a>
										</div>
									</div>
							</form>
		 			</div>
                </div>
            </div>
        </div>
	</div>
</div>
