
<?php require 'dbconnection.php'; ?> 
	<?php 	
		if(isset($_REQUEST['btn_insert'])){
			try{				
				$contact1 = $_REQUEST['contact1'];				
					if (empty($contact1)) {
					  $errorMsg = "please Enter the contact1";	
					}
					if(!isset($errorMsg)){
				  		$insert_stmt = $connection->prepare('INSERT INTO contact_kenya(contact1) VALUES(:contact1)'); // sql insert query				
				  		$insert_stmt->bindParam(':contact1', $contact1);			  	
				  			if($insert_stmt->execute()){
				  	  			 $insertMsg="File Upload Successfully."; // execute query success message
				  	   			header("location:read_contact_kenya.php"); 
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
											<a href="read_contact_kenya.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div>                            
                </div>
            </div>
        </div>				
	</div>		
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
	