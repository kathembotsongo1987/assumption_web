
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>

<div class="wrapper">	
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;"> Create short text</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	
	<div class="form-group">
		<label class="col-sm-3 control-label">text</label>
			<div class="col-sm-6">
				<input type="text" name="text1" class="form-control" placeholder="enter name">
			</div>
	</div>

	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
				<a href="read_music_text1.php" class="btn btn-danger">Cancel</a>
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
                    
           
				
		


	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				
				
				$text1 = $_REQUEST['text1']; // this txt_name is the name of the input coming from the form	
						
								
				if(empty($text1)){
					$errorMsg = "please Enter text1";					
				} 
					
				
				  
				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO music_text1(text1) VALUES(:text1)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':text1',$text1); // bind all parameter
				  						  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;read_music_text1.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>