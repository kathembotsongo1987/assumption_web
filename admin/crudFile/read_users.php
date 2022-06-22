
<?php 
	  require_once 'header.php'; 
	  require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM users WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	
	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM users WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_users.php");
}

?>

<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
            <div class="panel panel-default">                
                <div class="panel-body">
                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" style="text-align: center;">
							<thead>
								<tr>
									<th style="text-align: center;">First Name</th>
									<th style="text-align: center;">Last Name</th>
									<th style="text-align: center;">Username</th>
									<th style="text-align: center;">Password</th>									
									<th style="text-align: center;">Delete</th>									
								</tr>
							</thead>
							<tbody>
								<?php 
									$select_stmt = $connection->prepare("SELECT * FROM users"); //sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>

								<tr>									
									<td><?php echo $row['firstname']; ?></td>
									<td><?php echo $row['lastname']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td><?php echo $row['password']; ?></td>									
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
		
