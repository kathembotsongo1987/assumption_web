
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM europ_location WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM europ_location WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_europ_location.php");
}

?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3><a href="create_europ_location.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add New data in the Province of Europ</a></h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" style="text-align: center;">
	<thead>
		<tr>
			<th style="text-align: center;">Country</th>
			<th style="text-align: center;">Number of Communities</th>
			<th style="text-align: center;">Edit</th>
			<th style="text-align: center;">Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$select_stmt = $connection->prepare("SELECT * FROM europ_location"); //sql select query
			$select_stmt->execute();
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>

					<tr>
						<td><?php echo $row['country']; ?></td>
						<td><?php echo $row['no_community']; ?></td>
						<td><a href="edit_europ_location.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
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


