<?php require 'dbconnection.php'; ?>
<?php 
	if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM temporary_vows WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("upload/".$row['image']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM temporary_vows WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:read_temporary_vows.php");
}

?>

<?php require 'header2.php'; ?>
<?php require_once 'sidedashboad.php'; ?>
<?php require_once 'js_datatable.php'; ?>
<body>	
<div class="wrapper">	
	<div class="">			
		<div class="col-lg-12">
			<div class="panel panel-default">
                    <div class="panel-heading">
                    	<h1 style="text-align: center; color: blue;">DATA MANIPULATION || TEMPORARY VOWS</h1>
                        <h3><a href="create_temporary_vows.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add File</a></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th style="text-align: center;">Image</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Country</th>
                                        <th style="text-align: center;">Community</th>
                                        <th style="text-align: center;">Date T. V.</th>
                                        <th style="text-align: center;">Phone</th>
                                        <th style="text-align: center;">Email</th>
										<th style="text-align: center;">Edit</th>
										<th style="text-align: center;">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$select_stmt = $connection->prepare("SELECT * FROM temporary_vows"); //sql select query
										$select_stmt->execute();
										while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
											{
												?>

									<tr>
										<td><img src="upload/<?php echo $row['image']; ?>" style="width: 70px; height: 70px; border-radius: 50%;"></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['country']; ?></td>
                                        <td><?php echo $row['community']; ?></td>
                                        <td><?php echo $row['temp_v_date']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
										<td><a href="edit_temporary_vows.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
										<td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
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
</body>

<?php require 'layout_footer.php' ?>