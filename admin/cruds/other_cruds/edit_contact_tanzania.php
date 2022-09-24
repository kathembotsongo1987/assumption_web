
<?php 
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM contact_tanzania WHERE id =:id'); //sql select query
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
		$contact1 = $_REQUEST['contact1'];		 

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE contact_tanzania SET contact1=:contact1 WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':contact1',$contact1);			
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_contact_tanzania.php");
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><a href="create_contact_tanzania.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
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
								<label class="col-sm-3 control-label">contact 1</label>
									<div class="col-sm-6">
										<input type="text" name="contact1" class="form-control" value=" <?php echo $contact1; ?>" required/>
									</div>
							</div>	
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9 m-t*15">
									<input type="submit" name="btn_update" class="btn btn-primary" value="Update">
										<a href="read_contact_tanzania.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
		 			</div>
                </div>
            </div>
        </div>				
	</div>		
</div>
<?php require 'layout_footer.php' ?>