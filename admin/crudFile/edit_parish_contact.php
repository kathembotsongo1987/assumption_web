
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM parish_contacts WHERE id =:id'); //sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	catch(PDOException $e){
		$e->getMessage();
	}
}

if(isset($_REQUEST['btn_update'])){
	try
			{
				

				
				$parish = $_REQUEST['parish']; 
				$phone = $_REQUEST['phone']; // 
				$email = $_REQUEST['email']; // 
				$facebook = $_REQUEST['facebook'];		
				$instagram = $_REQUEST['instagram'];
				$twitter = $_REQUEST['twitter'];
				$youtube = $_REQUEST['youtube'];

				
			$upldate_stmt = $connection->prepare('UPDATE parish_contacts SET parish=:parish_up, phone=:phone_up, email=:email_up, facebook=:facebook_up, instagram=:instagram_up, twitter=:twitter_up, youtube=:youtube_up   WHERE id=:id'); //slq update the query.													
			$upldate_stmt->bindParam(':parish_up',$parish);
			$upldate_stmt->bindParam(':phone_up',$phone);
			$upldate_stmt->bindParam(':email_up',$email);
			$upldate_stmt->bindParam(':facebook_up',$facebook);
			$upldate_stmt->bindParam(':instagram_up',$instagram);
			$upldate_stmt->bindParam(':twitter_up',$twitter); // bind all parameter
			$upldate_stmt->bindParam(':youtube_up',$youtube); // bind all parameter
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				// header("refresh:3; read_parish.php");//reflesh 3 second and redirect to read.php page.
			}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
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
			<?php 

			if(isset($errorMsg)){
				?>
				<div class="alert alert-danger">
					<strong>WRONG ! <?php echo $errorMsg; ?> </strong>
				</div>

				<?php 
				}
				 ?>
			
<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Parish</label>
		<div class="col-sm-6">
			<input type="text" name="parish" class="form-control" placeholder="enter the name of the Parish" value=" <?php echo $parish; ?> ">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Phone</label>
			<div class="col-sm-6">
				<input type="text" name="phone" class="form-control" placeholder="enter Phone number" value=" <?php echo $phone; ?> ">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Email</label>
			<div class="col-sm-6">
				<input type="email" name="email" class="form-control" placeholder="enter Email" value=" <?php echo $email; ?> ">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Facebook</label>
			<div class="col-sm-6">
				<input type="text" name="facebook" class="form-control" placeholder="enter the Facebook Link" value=" <?php echo $facebook; ?> ">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Instagram</label>
			<div class="col-sm-6">
				<input type="text" name="instagram" class="form-control" placeholder="enter Instagram Link" value=" <?php echo $instagram; ?> ">
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Twitter</label>
		<div class="col-sm-6">
				<input type="text" name="twitter" class="form-control" placeholder="enter Twitter Link" value=" <?php echo $twitter; ?> ">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Youtube</label>
		<div class="col-sm-6">
				<input type="text" name="youtube" class="form-control" placeholder="enter URL for Youtube" value=" <?php echo $youtube; ?> ">
		</div>
	</div>
	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_update" class="btn btn-success" value="update">
				<a href="read_parish_contact.php" class="btn btn-danger">Cancel</a>
			</div>
	</div>
</form>
	
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