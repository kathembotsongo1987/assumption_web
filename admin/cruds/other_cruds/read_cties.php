
<?php 
	require_once 'dbconnection.php';

if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM communities WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM communities WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_cty_kenya.php");
}
?>

<?php require 'layout_header.php' ?>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
		    <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="text-align: center;">DATA MANIPULATION || COMMUNITIES</h1>
                    <h3><a href="create_cties.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add New data</a></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" style="text-align: center;">
							<thead>
								<tr>			
									<th style="text-align: center;">Name</th>
									<th style="text-align: center; text-transform: uppercase;">Diocese</th>			
									<th style="text-align: center; text-transform: uppercase;">Country</th>			
									<th style="text-align: center;">Edit</th>
									<th style="text-align: center;">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$select_stmt = $connection->prepare("SELECT * FROM communities"); //sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>

										<tr>												
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['diocese']; ?></td>			
											<td><?php echo $row['country']; ?></td>			
											<td><a href="edit_cties.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
											<td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
										</tr>

								<?php 
								}					
								?>				
							</tbody>
						</table>
					</div>
                </div>
            </div>
        </div>
	</div>
</div>

<?php require 'layout_footer.php' ?>


