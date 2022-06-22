<?php session_start(); ?>
<?php include 'functions.php'; ?>


<!-- Call the universal header by inserting the header function -->
<?=template_header(''); ?>

<body>
<div class="container">
	<h1 class="page-header" style="margin-left: 32%;"> DATA MANIPULATION</h1>
	<div class="row">
		<div class="col-sm-12 col-sm-offset-2">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"><span class="fas fa-plus" style="font-size: 20px;"></span>New</button>

			<?php 				
				if(isset($_SESSION['message'])){
					?>
					<div class="alert alert-info text-center" style="margin-top: 20px;">		
						<?php echo $_SESSION['message']; ?>				
					</div>
					<?php 
					unset($_SESSION['message']);
				}
			 ?>
           
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>					
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						//include our connection
						
						$database = new Connection();
    					$db = $database->open();
						try{	
						    $sql = 'SELECT * FROM registration';
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['id']; ?></td>
						    		<td><?php echo $row['name']; ?></td>
						    		<td><?php echo $row['email']; ?></td>
						    		<td><?php echo $row['password']; ?></td>
						    		<td>
						    			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_member"><span class="fas fa-edit"></span>Edit</button>
						    			<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_<?php echo $row['id']; ?>"><span class="fas fa-trash"></span>Delete</button>

						    		</td>						    		
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						//close connection
						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?=template_footer() ?>
<?php include('modals.php'); ?>


