
<?php 	  
require_once 'dbconnection.php';
if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM lay_form WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	
	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM lay_form WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_lay_form.php");
}

?>

<?php require_once 'layout_header.php';  ?>
<div class="wrapper">		
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color: blue; text-align: center;"><a href="create_lay_form.php"><span class="glyphicon glyphicon-plus"></a>DATA MANIPULATION || OUR LAY ASSUMPTIONIST</h1>
            </div>
        	<div class="panel-body">
                <div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" style="text-align: center;">
						<thead>
							<tr>
								<th style="text-align: center;">First Name</th>			
								<th style="text-align: center;">Last Name</th>
								<th style="text-align: center;">Email</th>
								<th style="text-align: center;">Phone</th>
								<th style="text-align: center;">Country</th>
								<th style="text-align: center;">Parish</th>
								<th style="text-align: center;">Message</th>
								<th style="text-align: center;">Edit</th>
								<th style="text-align: center;">Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$select_stmt = $connection->prepare("SELECT * FROM lay_form"); //sql select query
								$select_stmt->execute();
								while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
							{
							?>
								<tr>
									<td><?php echo $row['fname']; ?></td>
									<td><?php echo $row['lname']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['country']; ?></td>
									<td><?php echo $row['parish']; ?></td>
									<td><?php echo $row['message']; ?></td>
									<td><a href="edit_lay_form.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
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
			
	
<?php require 'layout_footer.php' ;?>

