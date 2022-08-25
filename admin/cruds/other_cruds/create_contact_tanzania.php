
<?php require 'dbconnection.php'; ?>
	<?php 	
		if(isset($_REQUEST['btn_insert'])){
			try{				
				$contact1 = $_REQUEST['contact1']; 				
				if (empty($contact1)) {
					$errorMsg = "please Enter the contact1";	
				}				
				if(!isset($errorMsg)){
				  $insert_stmt = $connection->prepare('INSERT INTO contact_tanzania(contact1) VALUES(:contact1)');   				
				  $insert_stmt->bindParam(':contact1', $contact1);			  				
				  		
				  	if($insert_stmt->execute()){
				  	   $insertMsg="File Upload Successfully."; // execute query success message
				  			header("refresh:1;read_contact_tanzania.php"); //refresh 3 second and redirext to the read page
				  	}
				}
			}
			catch(PDOException $e){
					echo $e->getMessage();
			}
		}		
	 ?>

<?php require 'layout_header.php'; ?>

<div class="wrapper">			
	<div class="col-lg-12">
		<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="color: blue; text-align: center;"> Create the phone contact</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<form method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">contact 1</label>
									<div class="col-sm-6">
										<input type="text" name="contact1" class="form-control" placeholder="enter Country of origine">
									</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<label class="col-sm-6 control-label">Action</label>
										<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
											<a href="read_contact_tanzania.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div>
                </div>
            </div>
        </div>				
	</div>		
</div>
			
	
