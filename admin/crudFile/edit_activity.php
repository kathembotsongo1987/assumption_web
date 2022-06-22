
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM prov_calendar WHERE id =:id'); //sql select query
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
		$date = $_REQUEST['txt_date']; // textbox name "txt_name"
		$event = $_REQUEST['txt_event']; // textbox name "txt_name"
		$location = $_REQUEST['txt_location']; // textbox name "txt_name"

	
		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE prov_calendar SET Date_activity=:date_up, Event=:event_up, Location=:location_up WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':date_up',$date);
			$upldate_stmt->bindParam(':event_up',$event); // bind all parameter
			$upldate_stmt->bindParam(':location_up',$location); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				
				header("refresh:3; read_prov_calendar.php");//reflesh 3 second and redirect to read.php page.
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
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3><a href="create_prov_calendar.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Activity</a></h3>
                        </div>
                        <!-- /.panel-heading -->
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
		<label class="col-sm-3 control-label">Date</label>
		<div class="col-sm-6">
			<input type="text" name="txt_date" class="form-control" value=" <?php echo $Date_activity; ?>" required/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Event</label>
		<div class="col-sm-6">
			<input type="text" name="txt_event" class="form-control" value=" <?php echo $Event; ?>" required/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Location</label>
		<div class="col-sm-6">
			<input type="text" name="txt_location" class="form-control" value=" <?php echo $Location; ?>" required/>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9 m-t*15">
			<input type="submit" name="btn_update" class="btn btn-primary" value="Update">
			<a href="read_prov_calendar.php" class="btn btn-danger">Cancel</a>
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

</body>