
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM lay_groups WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM lay_groups WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_ecumenism.php");
}

?>

<div class="wrapper">		
		
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3><a href="create_lay_groups.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add file</a></h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" style="text-align: center;">
	<thead>
		<tr>
			<th style="text-align: center;">Lay image</th>			
			<th style="text-align: center;">Introduction title</th>
			<th style="text-align: center;">Introduction description</th>
			<th style="text-align: center;">Title of the Article</th>
			<th style="text-align: center;">Description of the Article</th>
			<th style="text-align: center;">Youtube</th>
			<th style="text-align: center;">Edit</th>
			<th style="text-align: center;">Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$select_stmt = $connection->prepare("SELECT * FROM lay_groups"); //sql select query
			$select_stmt->execute();
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>

					<tr>
						<td><img src="upload/<?php echo $row['lay_image']; ?>" width="100px" height="60px"></td>						
						<td><?php echo $row['intro_title']; ?></td>
						<td><?php echo $row['intro_description']; ?></td>
						<td><?php echo $row['articletitle']; ?></td>
						<td><?php echo $row['articledescription']; ?></td>
						<td><?php echo $row['video']; ?></td>
						<td><a href="edit_lay_groups.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
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
			
	


