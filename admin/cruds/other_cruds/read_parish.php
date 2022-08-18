

<?php require 'dbconnection.php'; ?>

<?php 
	if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM parishes WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM parishes WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_schools.php");
}
?>

<?php require 'layout_header.php'; ?>
<div class="wrapper">		
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><a href="create_school.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add school</a></h3>
            </div>
        		<div class="panel-body">
              		<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" style="text-align: center;">
							<thead>
								<tr>
									<th style="text-align: center;">School image</th>		
									<th style="text-align: center;">School name</th>
									<th style="text-align: center;">School description</th>
									<th style="text-align: center;">Title of the Article</th>
									<th style="text-align: center;">Description of the Article</th>
									<th style="text-align: center;">School chaplain</th>
									<th style="text-align: center;">School Teachers</th>
									<th style="text-align: center;">Contact1</th>
									<th style="text-align: center;">Contact2</th>
									<th style="text-align: center;">Email</th>
									<th style="text-align: center;">Youtube</th>
									<th style="text-align: center;">Article image</th>
									<th style="text-align: center;">Edit</th>
									<th style="text-align: center;">Delete</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$select_stmt = $connection->prepare("SELECT * FROM parishes"); //sql select query
								$select_stmt->execute();
								while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
							{
							?>
								<tr>
									<td><img src="upload/<?php echo $row['building']; ?>" width="100px" height="60px"></td>						
									<td><?php echo $row['parish_name']; ?></td>
									<td><?php echo $row['parish_description']; ?></td>
									<td><?php echo $row['articletitle']; ?></td>
									<td><?php echo $row['articledescription']; ?></td>
									<td><img src="upload/<?php echo $row['parish_priest']; ?>" width="100px" height="60px"></td>
									<td><img src="upload/<?php echo $row['parish_church_council']; ?>" width="100px" height="60px"></td>					
									<td><?php echo $row['contact1']; ?></td>
									<td><?php echo $row['contact2']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['video']; ?></td>
									<td><img src="upload/<?php echo $row['chretians']; ?>" width="100px" height="60px"></td>
									<td><a href="edit_parish.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
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
			
	


