


<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;">These are dynamic statistic</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	
	<div class="form-group">
		<label class="col-sm-3 control-label">Target</label>
		<div class="col-sm-6">
				<input type="text" name="txt_target" class="form-control" placeholder="enter Country">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Congregation</label>
		<div class="col-sm-6">
				<input type="number" name="txt_congregation" class="form-control" placeholder="enter city">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Vice Province</label>
		<div class="col-sm-6">
				<input type="number" name="txt_vp" class="form-control" placeholder="enter community">
			</div>
	</div>
	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
				<a href="read_textlay.php" class="btn btn-danger">Cancel</a>
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

				$Target = $_REQUEST['txt_target']; 
				$Congregation = $_REQUEST['txt_congregation']; 
				$vp = $_REQUEST['txt_vp']; 

				if(empty($Target)){
					$errorMsg = "please Enter the Target";					
				} else if (empty($Congregation)) {
					$errorMsg = "please enter statistic at the congregational level";	
				} else if (empty($vp)) {
					$errorMsg = "please Enter the statistic at the vice procinvial level";	
				}
				
				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO statistic(target, congregation, vice_province) VALUES(:target, :congregation, :vice_prov)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':target', $Target);
				  				$insert_stmt->bindParam(':congregation', $Congregation);
				  				$insert_stmt->bindParam(':vice_prov', $vp);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="data inserted Successfully."; // execute query success message
				  					header("refresh:1;statistic.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

