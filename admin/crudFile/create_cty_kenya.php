
<?php require 'dbconnection.php'; ?>

	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				
				$name = $_REQUEST['name']; 
				$diocese = $_REQUEST['diocese'];
				
				if(empty($name)){
					$errorMsg = "please Enter the name";					
				} 

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO communitieskenya(name, diocese) VALUES(:name, :diocese)'); 
				  				
				  				$insert_stmt->bindParam(':name',$name);
				  				$insert_stmt->bindParam(':diocese',$diocese);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;read_cty_kenya.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

	 <?php require 'header.php'; ob_start(); ?>

<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;"> Create Community</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<form method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Name</label>
										<div class="col-sm-6">
											<input type="name" name="name" class="form-control" placeholder="enter name">
										</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Diocese</label>
										<div class="col-sm-6">
											<input type="text" name="diocese" class="form-control" placeholder="enter Country of origine">
										</div>
								</div>	
	
								<div class="form-group">
									<div class="col-sm-6">
										<label class="col-sm-6 control-label">Action</label>
											<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
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
</div>

		