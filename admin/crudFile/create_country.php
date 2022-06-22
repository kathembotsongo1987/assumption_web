
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;">These are dynamic short text on the Lay Assumptionist Page</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	
	<div class="form-group">
		<label class="col-sm-3 control-label">Country Name</label>
		<div class="col-sm-6">
			<input type="text" name="txt_name" class="form-control" placeholder="enter name">
		</div>
	</div>

	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
				<a href="read_country.php" class="btn btn-danger">Cancel</a>
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

				$name = $_REQUEST['txt_name']; // this txt_name is the name of the input coming from the form	
				if (empty($name)) {
					$errorMsg = "please Enter the name of the country";	
				}
				
				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO countries(name) VALUES(:name)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':name', $name);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="data inserted Successfully."; // execute query success message
				  					header("refresh:3;read_country.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

