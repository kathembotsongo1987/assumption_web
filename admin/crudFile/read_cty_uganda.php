
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM communitiesuganda WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM communitiesuganda WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_cty_uganda.php");
}

?>

<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3><a href="create_cty_uganda.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Community</a></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" style="text-align: center;">
								<thead>
									<tr>			
										<th style="text-align: center;">Name</th>
											<th style="text-align: center; text-transform: uppercase;">Diocese</th>			
											<th style="text-align: center;">Edit</th>
											<th style="text-align: center;">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$select_stmt = $connection->prepare("SELECT * FROM communitiesuganda"); //sql select query
										$select_stmt->execute();
										while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
										{
										?>

											<tr>												
												<td><?php echo $row['name']; ?></td>
												<td><?php echo $row['diocese']; ?></td>
						
												<td><a href="edit_cty_uganda.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
												<td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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
</div>


