
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
		<label class="col-sm-3 control-label">Title</label>
		<div class="col-sm-6">
				<input type="text" name="txt_title" class="form-control" placeholder="enter name">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Description</label>
		<div class="col-sm-6">
				<input type="text" name="txt_description" class="form-control" placeholder="enter Description">
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

				$Title = $_REQUEST['txt_title']; // this txt_name is the name of the input coming from the form	
				$Description = $_REQUEST['txt_description']; // this txt_name is the name of the input coming from the form	
				

				if(empty($Title)){
					$errorMsg = "please Enter the Title of your post";					
				} else if (empty($Description)) {
					$errorMsg = "please Enter the Description of your post";	
				}
				
				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO textlay(title, description) VALUES(:title, :description)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':title', $Title);
				  				$insert_stmt->bindParam(':description', $Description);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="data inserted Successfully."; // execute query success message
				  					header("refresh:3;create_textlay.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

