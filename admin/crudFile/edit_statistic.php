



<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM statistic WHERE id =:id'); //sql select query
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
	
		$target = $_REQUEST['txt_target']; // textbox name "txt_name"
		$congregation = $_REQUEST['txt_congregation']; 
		$province = $_REQUEST['txt_province']; 

			$upldate_stmt = $connection->prepare('UPDATE statistic SET target=:target_up, congregation=:congregation_up, vice_province=:vp_up WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':target_up',$target);
			$upldate_stmt->bindParam(':congregation_up',$congregation);
			$upldate_stmt->bindParam(':vp_up',$province);
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Upladed Successfully....."; // File update success message
				header("refresh:3; read_statistic.php");//reflesh 3 second and redirect to read.php page.
			}
		}
	
	
	


 ?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;">These are dynamic location at the general level</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	
	<div class="form-group">
		<label class="col-sm-3 control-label">Target</label>
		<div class="col-sm-6">
				<input type="text" name="txt_target" class="form-control" value="<?php echo $row['target']; ?>" >
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Congregation</label>
		<div class="col-sm-6">
				<input type="text" name="txt_congregation" class="form-control" value="<?php echo $row['congregation']; ?>" >
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Vice Province</label>
		<div class="col-sm-6">
				<input type="text" name="txt_province" class="form-control" value="<?php echo $row['vice_province']; ?>" >
			</div>
	</div>
	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_update" class="btn btn-success" value="update">
				<a href="read_statistic.php" class="btn btn-danger">Cancel</a>
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
           
