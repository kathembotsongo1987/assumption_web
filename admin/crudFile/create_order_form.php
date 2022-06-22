
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1 style="color: blue; text-align: center;">These are dynamic images and text on our Home Page</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Full name</label>
		<div class="col-sm-6">
				<input type="text" name="name" class="form-control" placeholder="enter name">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Town of Diocese</label>
		<div class="col-sm-6">
				<input type="text" name="town" class="form-control" placeholder="enter name">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Address</label>
		<div class="col-sm-6">
				<input type="text" name="address" class="form-control" placeholder="enter Description">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Email</label>
		<div class="col-sm-6">
				<input type="text" name="email" class="form-control" placeholder="enter Description">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Phone</label>
		<div class="col-sm-6">
				<input type="text" name="phone" class="form-control" placeholder="enter Description">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">book</label>
		<div class="col-sm-6">
				<input type="text" name="book" class="form-control" placeholder="enter Description">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">copies</label>
		<div class="col-sm-6">
				<input type="text" name="copies" class="form-control" placeholder="enter Description">
			</div>
	</div>
	
	
	<div class="form-group">
			<div class="col-sm-6">
				<label class="col-sm-6 control-label">Action</label>
				<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
				<a href="read.php" class="btn btn-danger">Cancel</a>
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

</div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
           
				
		


	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				

				
				$name = $_REQUEST['name']; 
				$town = $_REQUEST['town']; 
				$address = $_REQUEST['address']; 
				$email = $_REQUEST['email']; 
				$phone = $_REQUEST['phone']; 
				$book = $_REQUEST['book']; 
				$copies = $_REQUEST['copies']; 

				
				if(empty($name)){
					$errorMsg = "please Enter your name";					
				} else if (empty($town)) {
					$errorMsg = "please Enter your town";	
				}
				else if(empty($address)){
					$errorMsg = "please Enter your address";					
				} else if (empty($email)) {
					$errorMsg = "please Enter your email";	
				}
				else if (empty($phone)) {
					$errorMsg = "please enter your phone number";	
				}
				else if(empty($book)){
					$errorMsg = "please Enter the book";					
				} else if (empty($copies)) {
					$errorMsg = "please Enter the number of copies you want";	
				}	
				  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO order_form(name, town_diocese, address, email, phone, select_book, select_copies)VALUES(:name, :town_diocese, :address, :email, :phone, :select_book, :select_copies)'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':name', $name); // bind all parameter
				  				$insert_stmt->bindParam(':town_diocese', $town);
				  				$insert_stmt->bindParam(':address', $address);
				  				$insert_stmt->bindParam(':email', $email);
				  				$insert_stmt->bindParam(':phone', $phone);
				  				$insert_stmt->bindParam(':select_book', $book);
				  				$insert_stmt->bindParam(':select_copies', $copies);
				  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;read_order_form.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

