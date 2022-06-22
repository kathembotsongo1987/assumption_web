
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM communication_video WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM communication_video WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_communication_video.php");
}

?>

<div class="wrapper">	
	<div class="container">		
		<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><a href="create_communication_video.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" style="text-align: center;">
						<thead>
							<tr>
								<th style="text-align: center;">Title 1</th>
								<th style="text-align: center;">Description 1</th>
								<th style="text-align: center;">Title 2</th>
								<th style="text-align: center;">Description 2</th>
								<th style="text-align: center;">Video</th>
								<th style="text-align: center;">Edit</th>
								<th style="text-align: center;">Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$select_stmt = $connection->prepare("SELECT * FROM communication_video"); //sql select query
								$select_stmt->execute();
								while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
								{
								?>
									<tr>
										<td><?php echo $row['title1']; ?></td>
										<td><?php echo $row['description1']; ?></td>
										<td><?php echo $row['title2']; ?></td>
										<td><?php echo $row['description2']; ?></td>
										<td><?php echo $row['video']; ?></td>
										<td><a href="edit_communication_video.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
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
