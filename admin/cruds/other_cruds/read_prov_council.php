
<?php 
	  
	  require_once 'dbconnection.php';

	if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM provincial_council WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM provincial_council WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_prov_council.php");
}

?>

<?php require_once 'layout_header.php';  ?>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="panel panel-default">
                <div class="panel-heading">
                	<h1 style="text-align: center; color: blue;">DATA MANIPULATION || OUR PROVINCIAL COUNCIL</h1>
                    <h3><a href="create_prov_council.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
                </div>
             	<div class="panel-body">
                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" style="text-align: center;">
							<thead>
								<tr>
									<th style="text-align: center;">Image</th>
									<th style="text-align: center;">Name</th>
									<th style="text-align: center;">Title</th>
									<th style="text-align: center;">Phone</th>
									<th style="text-align: center;">Email</th>
									<th style="text-align: center;">Edit</th>
									<th style="text-align: center;">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$select_stmt = $connection->prepare("SELECT * FROM provincial_council"); //sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
								{
								?>
									<tr>
										<td><img src="upload/<?php echo $row['image']; ?>" width="100px" height="60px"></td>
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['title']; ?></td>
										<td><?php echo $row['phone']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td><a href="edit_prov_council.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
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
		
<?php require_once 'layout_footer.php';  ?>	



