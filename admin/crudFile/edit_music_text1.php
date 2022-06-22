
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM music_text1 WHERE id =:id'); //sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	catch(PDOException $e){
		$e->getMessage();
	}
}

if(isset($_REQUEST['btn_update'])){
	try
			{
				$text1 = $_REQUEST['text1']; // this txt_name is the name of the input coming from the form	
				
				
				if(empty($text1)){
					$errorMsg = "please Enter text1";					
				} 
				

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE music_text1 SET text1=:text1 WHERE id=:id'); //slq update the query.													
			$upldate_stmt->bindParam(':text1',$text1);// bind all parameter						  			
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_music_text1.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

 ?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                                            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
			<?php 

			if(isset($errorMsg)){
				?>
				<div class="alert alert-danger">
					<strong>WRONG ! <?php echo $errorMsg; ?> </strong>
				</div>

				<?php 
				}
				 ?>
			
<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">text 1</label>
			<div class="col-sm-6">
				<input type="text" name="text1" class="form-control" placeholder="enter name">
			</div>
	</div>

	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_update" class="btn btn-success" value="Insert">
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