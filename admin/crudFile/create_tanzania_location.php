


<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;">Data insertion in Africa</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">

	<div class="form-group">
		<label class="col-sm-3 control-label">Country</label>
		<div class="col-sm-6">
			<input type="text" name="txt_country" class="form-control" placeholder="enter no of cties">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label">City/County</label>
		<div class="col-sm-6">
				<input type="text" name="txt_city" class="form-control" placeholder="enter country">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Communities</label>
		<div class="col-sm-6">
				<input type="text" name="txt_community" class="form-control" placeholder="enter no of cties">
			</div>
	</div>	
	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
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
           
				
		


	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				

				$City = $_REQUEST['txt_city']; 
				$Communities = $_REQUEST['txt_community']; 
				$country = $_REQUEST['txt_country']; 

				if (empty($Communities)) {
					$errorMsg = "please Enter the number of communities";	
				}
				
				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO tanzania_location(city,community,country) VALUES(:city, :community, :country)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':city', $City);
				  				$insert_stmt->bindParam(':community', $Communities);
				  				$insert_stmt->bindParam(':country', $country);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="data inserted Successfully."; // execute query success message
				  					header("refresh:3;read_tanzania_location.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

