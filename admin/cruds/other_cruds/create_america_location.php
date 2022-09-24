
<?php require 'dbconnection.php'; ?>

	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try{	
				$Country = $_REQUEST['txt_country']; 
				$Communities = $_REQUEST['txt_community']; 

				if (empty($Country)) {
					$errorMsg = "please Enter the country";	
				} else if (empty($Communities)) {
					$errorMsg = "please Enter the number of communities";	
					}				
				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO america_location(country, no_community) VALUES(:country, :no_community)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':country', $Country);
				  				$insert_stmt->bindParam(':no_community', $Communities);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="data inserted Successfully."; // execute query success message
				  					header("location:read_america_location.php"); //refresh 3 second and redirext to the read page
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
                    <h1 style="color: blue; text-align: center;">DATA MANIPULATION || PROVINCE OF EUROP</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<form method="post" class="form-horizontal" enctype="multipart/form-data">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Country</label>
									<div class="col-sm-6">
										<input type="text" name="txt_country" class="form-control" placeholder="enter country">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">No Communities</label>
									<div class="col-sm-6">
										<input type="number" name="txt_community" class="form-control" placeholder="enter no of cties">
									</div>
							</div>	
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
											<a href="read_america_location.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div>
                </div>
            </div>
        </div>
	</div>
</div>


<?php require 'layout_footer.php';?>