
<?php 
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
		
		$date = $_REQUEST['date']; 
		$event = $_REQUEST['event']; 
		$location = $_REQUEST['location']; 

				
				if(empty($date)){
					$errorMsg = "please Enter the date";					
				} else if (empty($event)) {
					$errorMsg = "please Enter the Event";	
				}
				else if(empty($location)){
						$errorMsg = "Please enter location";
					} 
				  		
		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE prov_calendar SET Date_event=:date_up, Event_prepared=:event_up, Location=:location_up WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':date_up',$date);
			$upldate_stmt->bindParam(':event_up',$event);
			$upldate_stmt->bindParam(':location_up',$location); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("location: read_prov_calendar.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

 ?>

<?php require 'layout_header.php' ?>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			 <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h1 style="text-align: center;">DATA MANIPULATION || PROVINCIAL CALENDAR</h1>
                        <h3><a href="creat_prov_event.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Event</a></h3>
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
										<label class="col-sm-3 control-label">Date</label>
											<div class="col-sm-6">
												<input type="text" name="date" class="form-control" value=" <?php echo $Date_event; ?>" required/>
											</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Event</label>
											<div class="col-sm-6">
												<input type="text" name="event" class="form-control" value=" <?php echo $Event_prepared; ?>" required/>
											</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Location</label>
											<div class="col-sm-6">
												<input type="text" name="location" class="form-control" value=" <?php echo $Location; ?>" required/>
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
                    </div>
                </div>
		</div>
	</div>			
</div>

<?php require 'layout_footer.php' ?>