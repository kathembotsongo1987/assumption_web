
<?php require 'dbconnection.php'; ?>

	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				
				$name = $_REQUEST['name']; 
				$diocese = $_REQUEST['diocese'];
				$country = $_REQUEST['country'];
				
				if(empty($name)){
					$errorMsg = "please Enter the name";					
				}
				else if(empty($diocese)){
					$errorMsg = "please Enter the diocese";					
				} 
				else if(empty($country)){
					$errorMsg = "please Enter the country";					
				} 

				 if(!isset($errorMsg)){
				  	$insert_stmt = $connection->prepare('INSERT INTO communities(name, diocese, country) VALUES(:name, :diocese, :country)');		  				
				  	$insert_stmt->bindParam(':name',$name);
				  	$insert_stmt->bindParam(':diocese',$diocese);
				  	$insert_stmt->bindParam(':country',$country);
				  				
				  	if($insert_stmt->execute()){
				  	   $insertMsg="File Upload Successfully."; // execute query success message
				  		header("refresh:1;read_cties.php"); //refresh 3 second and redirext to the read page
				  	}
				 }
			}
			catch(PDOException $e){
				echo $e->getMessage();
		}
	}
		
	?>

	 <?php require 'layout_header.php'; ob_start(); ?>

<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="color: blue; text-align: center;">DATA MANIPULATION || COMMUNITIES KENYA</h1>
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
										<input type="text" name="diocese" class="form-control" placeholder="enter diocese">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Country</label>
									<div class="col-sm-6">
										<input type="text" name="country" class="form-control" placeholder="enter Country ">
									</div>
							</div>	
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
											<a href="read_cties.php" class="btn btn-danger">Cancel</a>
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