
	<?php 	
	require 'dbconnection.php';
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{					
				$date_event = $_REQUEST['date']; 
				$event_prepared = $_REQUEST['event']; 
				$location = $_REQUEST['location']; 

				// now set the part to the store. where the image is going to be kept. You must open first a new folder called upload. that is where images will be stored in your computer
				

				if(empty($date_event)){
					$errorMsg = "please Enter the date of your event";					
				} else if (empty($event_prepared)) {
					$errorMsg = "please Enter the event";	
				}else if (empty($location)) {
					$errorMsg = "please Enter the locaton of your event";	
				}

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO prov_calendar(Date_event, event_prepared, Location) VALUES(:date_event, :event_prepared, :location)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':date_event', $date_event); // bind all parameter
				  				$insert_stmt->bindParam(':event_prepared', $event_prepared);
				  				$insert_stmt->bindParam(':location', $location);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("location:read_prov_calendar.php"); 
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

<?php require_once 'layout_header.php'; ?>

<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="text-align: center;">DATA MANIPULATION || PROVINCIAL CALENDAR</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Date</label>
										<div class="col-sm-6">
											<input type="text" name="date" class="form-control" placeholder="enter date">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Event</label>
										<div class="col-sm-6">
											<input type="text" name="event" class="form-control" placeholder="enter event">
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Location</label>
										<div class="col-sm-6">
											<input type="text" name="location" class="form-control" placeholder="enter location">
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
                    </div>
                </div>
		</div>		
	</div>			
</div>

<?php require_once 'layout_footer.php'; ?>

	
