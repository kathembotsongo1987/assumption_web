
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;">These are dynamic Communities</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Country</label>
										<div class="col-sm-6">
											<input type="text" name="txt_country" class="form-control" placeholder="enter name">
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Diocese</label>
										<div class="col-sm-6">
											<input type="text" name="txt_diocese" class="form-control" placeholder="enter name">
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Community</label>
										<div class="col-sm-6">
											<input type="text" name="txt_community" class="form-control" placeholder="enter Description">
										</div>
								</div>
	
								<div class="form-group">
									<div class="col-sm-6">
										<label class="col-sm-6 control-label">Action</label>
											<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
												<a href="read_community.php" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</form>
						</div>
                        </div>
                    </div>
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

				$country = $_REQUEST['txt_country']; // this txt_name is the name of the input coming from the form	
				$diocese = $_REQUEST['txt_diocese']; // this txt_name is the name of the input coming from the form	
				$community = $_REQUEST['txt_community']; // this txt_name is the name of the input coming from the form	
				

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO communities(country, diocese, community) VALUES(:country_up, :diocese_up, :community_up)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':country_up', $country);
				  				$insert_stmt->bindParam(':diocese_up', $diocese);
				  				$insert_stmt->bindParam(':community_up', $community);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="data inserted Successfully."; // execute query success message
				  					header("refresh:1;read_prov_community.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

