
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM countries WHERE id =:id'); //sql select query
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
	
		$title = $_REQUEST['txt_title']; // textbox name "txt_name"
			$upldate_stmt = $connection->prepare('UPDATE countries SET name=:title_up WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':title_up',$title);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Upladed Successfully....."; // File update success message
				header("refresh:3; read_country.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	
	
	


 ?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3><a href="creat_post_H_Page.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Country</a></h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
			

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Country Name</label>
		<div class="col-sm-6">
			<input type="text" name="txt_title" class="form-control" value=" <?php echo $title; ?>" required/>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9 m-t*15">
			<input type="submit" name="btn_update" class="btn btn-primary" value="Update">
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