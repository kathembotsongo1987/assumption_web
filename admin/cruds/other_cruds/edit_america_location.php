
<?php
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM america_location WHERE id =:id'); //sql select query
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
	
		$Country = $_REQUEST['txt_country']; 
		$Communities = $_REQUEST['txt_community']; 

			$upldate_stmt = $connection->prepare('UPDATE america_location SET country=:country_up, no_community=:no_community_up WHERE id=:id'); //slq update the query.
			
			$upldate_stmt->bindParam(':country_up',$Country);
			$upldate_stmt->bindParam(':no_community_up',$Communities);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Upladed Successfully....."; // File update success message
				header("refresh:1; read_america_location.php");//reflesh 3 second and redirect to read.php page.
			}
		}
 ?>

<?php  require_once 'layout_header.php'; ?>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="color: blue; text-align: center;">DATA MANIPULATION || PROVINCE OF AMERICA</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<form method="post" class="form-horizontal" enctype="multipart/form-data">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Country</label>
									<div class="col-sm-6">
										<input type="text" name="txt_country" class="form-control" value="<?php echo $row['country']; ?>" >
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">No Communities</label>
									<div class="col-sm-6">
										<input type="number" name="txt_community" class="form-control" value="<?php echo $row['no_community']; ?>" >
									</div>
							</div>	
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_update" class="btn btn-success" value="update">
											<a href="read_textlay.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div>
                </div>
            </div>
        </div>				
	</div>		
</div>

<?php require 'layout_footer.php' ;?>