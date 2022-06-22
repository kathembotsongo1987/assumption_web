
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3><a href="add.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Date</label>
		<div class="col-sm-6">
				<input type="text" name="txt_date" class="form-control" placeholder="enter name">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Event</label>
		<div class="col-sm-6">
				<input type="text" name="txt_event" class="form-control" placeholder="enter name">
			</div>
	</div>
		<div class="form-group">
		<label class="col-sm-3 control-label">Location</label>
		<div class="col-sm-6">
				<input type="text" name="txt_location" class="form-control" placeholder="enter name">
			</div>
	</div>
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
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

</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
           
				
		


	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{
				$date = $_REQUEST['txt_date'];
				$event = $_REQUEST['txt_event'];
				$location = $_REQUEST['txt_location'];
				
				if(empty($date)){
					$errorMsg = "please Enter the date of the activity";					
				} else if(empty($event)){
					$errorMsg = "please Enter the activity";					
				} else if(empty($location)){
					$errorMsg = "please Enter the location of the activity";					
				}
				
				if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO prov_calendar(Date_activity, Event, Location) VALUES(:Date_activity,:Event, :Location)'); // sql insert query
				  				$insert_stmt->bindParam(':Date_activity', $date);
				  				$insert_stmt->bindParam(':Event', $event); // bind all parameter
				  				$insert_stmt->bindParam(':Location', $location); // bind all parameter

				  				if($insert_stmt->execute()){
				  					$insertMsg="data inserted successfuly"; // execute query success message
				  					header("refresh:3;read_prov_calendar.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>