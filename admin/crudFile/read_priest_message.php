
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM philosophy_message WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("uploadformation/".$row['photo1']); //unlink function permanently remove your file
	unlink("uploadformation/".$row['photo2']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM philosophy_message WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_philosophy_message.php");
}

?>

<div class="wrapper">			
	<div class="col-lg-12">
		<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><a href="create_philosophy_message.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add message</a></h3>
                </div>
                        <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" style="text-align: center;">
							<thead>
								<tr>
									<th style="text-align: center;">Photo 1</th>
									<th style="text-align: center;">Description photo 1</th>
									<th style="text-align: center;">Photo 2</th>
									<th style="text-align: center;">Description photo 2</th>
									<th style="text-align: center;">Video</th>
									<th style="text-align: center;">Description video</th>
									<th style="text-align: center;">Edit</th>
									<th style="text-align: center;">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$select_stmt = $connection->prepare("SELECT * FROM philosophy_message"); //sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
										?>

											<tr>
												<td><img src="uploadformation/<?php echo $row['photo1']; ?>" width="100px" height="60px"></td>
												<td><?php echo $row['description1']; ?></td>
												<td><img src="uploadformation/<?php echo $row['photo2']; ?>" width="100px" height="60px"></td>
												<td><?php echo $row['description2']; ?></td>
												<td><iframe  src="<?php echo $row['video']; ?>" width="100px" height="60px"></iframe></td>
												<td><?php echo $row['descriptionvideo']; ?></td>
												<td><a href="edit_philosophy_message.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
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
			



