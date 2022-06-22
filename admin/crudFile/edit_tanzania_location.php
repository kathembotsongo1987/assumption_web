



<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM tanzania_location WHERE id =:id'); //sql select query
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
	
		$City = $_REQUEST['txt_city']; 
		$Communities = $_REQUEST['txt_community']; 
		$country = $_REQUEST['txt_country']; 

			$upldate_stmt = $connection->prepare('UPDATE tanzania_location SET city=:city_up, community=:community_up, country=:country_up WHERE id=:id'); //slq update the query.
			
			$upldate_stmt->bindParam(':city_up',$City);
			$upldate_stmt->bindParam(':community_up',$Communities);
			$upldate_stmt->bindParam(':country_up',$country);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Upladed Successfully....."; // File update success message
				header("refresh:3; read_tanzania_location.php");//reflesh 3 second and redirect to read.php page.
			}
		}
 ?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;">Dynamic data for Africa </h1>
                        </div>
                        <!-- /.panel-heading -->
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
		<label class="col-sm-3 control-label">City</label>
		<div class="col-sm-6">
				<input type="text" name="txt_city" class="form-control" value="<?php echo $row['city']; ?>" >
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Communities</label>
		<div class="col-sm-6">
				<input type="text" name="txt_community" class="form-control" value="<?php echo $row['community']; ?>" >
			</div>
	</div>
	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_update" class="btn btn-success" value="update">
				<a href="read_tanzania_location.php" class="btn btn-danger">Cancel</a>
			</div>
	</div>
</form>
	
	</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
		</div>
		
	</div>
			
	</div>

</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
           
