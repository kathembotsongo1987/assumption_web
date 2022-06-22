
<?php 
 require_once 'header.php';
 require_once 'dbconnection.php';  
 
 if(isset($_REQUEST['update_id'])) {
	try{
		$id = $_REQUEST['update_id']; //get "update_id from the read.php page through anchor tag operation and store in "$id" variable
		$select_stmt = $connection->prepare('SELECT * FROM book WHERE id =:id'); //sql select query
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
	try {
		$book = $_REQUEST['book'];		 
		$price = $_REQUEST['price'];		 

		if(!isset($errorMsg)){
			$upldate_stmt = $connection->prepare('UPDATE book SET book=:book, price=:price WHERE id=:id'); //slq update the query.
			$upldate_stmt->bindParam(':book',$book);			
			$upldate_stmt->bindParam(':price',$price);			
			$upldate_stmt->bindParam(':id',$id);

			if($upldate_stmt->execute()){
				$updateMsg = "File Uplade Successfully....."; // File update success message
				header("refresh:1; read_book.php");
			}
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><a href="create_book.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Book</a></h3>
                </div>
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
								<label class="col-sm-3 control-label">Book</label>
									<div class="col-sm-6">
										<input type="text" name="book" class="form-control" value=" <?php echo $book; ?>" required/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Price</label>
									<div class="col-sm-6">
										<input type="text" name="price" class="form-control" value=" <?php echo $price; ?>" required/>
									</div>
							</div>
	
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9 m-t*15">
									<input type="submit" name="btn_update" class="btn btn-primary" value="Update">
										<a href="read_book.php" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>	
					</div>
            	</div>
        	</div>
        </div>				
	</div>		
</div>
		