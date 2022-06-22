
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM email_tanzania WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);

	$delete_stmt = $connection->prepare('DELETE FROM email_tanzania WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_email_kenya.php");
}

?>

<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" style="text-align: center;">
	<thead>
		<tr>
			<th style="text-align: center;">email</th>			
			<th style="text-align: center;">subject</th>			
			<th style="text-align: center;">message</th>			
			<th style="text-align: center;">Read</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$select_stmt = $connection->prepare("SELECT * FROM email_tanzania"); //sql select query
			$select_stmt->execute();
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>

					<tr>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['subject']; ?></td>
						<td><?php echo $row['message']; ?></td>
						<td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Mark as read</a></td>
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


