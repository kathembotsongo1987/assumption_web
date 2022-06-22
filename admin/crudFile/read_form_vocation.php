
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM form_vocation WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM form_vocation WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_form_vocation.php");
}

?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" style="text-align: center;">
	<thead>
		<tr>
			<th style="text-align: center;">Name</th>
			<th style="text-align: center;">Diocese</th>
			<th style="text-align: center;">Phone</th>
			<th style="text-align: center;">Parish</th>
			<th style="text-align: center;">Message</th>
			<th style="text-align: center;">Email</th>
			<th style="text-align: center;">Country</th>
			<th style="text-align: center;">Read</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$select_stmt = $connection->prepare("SELECT * FROM form_vocation"); //sql select query
			$select_stmt->execute();
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>

					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['diocese']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['parish']; ?></td>
						<td><?php echo $row['message']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['country']; ?></td>
						
						<td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Mark as Read</a></td>
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


