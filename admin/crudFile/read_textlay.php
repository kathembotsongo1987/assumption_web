
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM textlay WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM textlay WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_textlay.php");
}

?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3><a href="create_textlay.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add New File</a></h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" style="text-align: center;">
	<thead>
		<tr>
			<th style="text-align: center;">Title</th>
			<th style="text-align: center;">Description</th>
			<th style="text-align: center;">Edit</th>
			<th style="text-align: center;">Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$select_stmt = $connection->prepare("SELECT * FROM textlay"); //sql select query
			$select_stmt->execute();
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>

					<tr>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><a href="edit_textlay.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
						<td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
					</tr>

				<?php 

					}
					
					?>
				
	</tbody>
</table>
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


