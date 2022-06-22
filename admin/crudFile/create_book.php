
<?php require 'dbconnection.php'; ?>
<?php require 'header.php'; ob_start(); ?>



<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color: blue; text-align: center;">Available books</h1>
                    </div>
                        <div class="panel-body">
                            <div class="table-responsive">
								<form method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label">Book</label>
											<div class="col-sm-6">
												<input type="text" name="book" class="form-control" placeholder="enter name">
											</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Price</label>
											<div class="col-sm-6">
												<input type="text" name="price" class="form-control" placeholder="enter name">
											</div>
									</div>	
									<div class="form-group">
										<div class="col-sm-6">
											<label class="col-sm-6 control-label">Action</label>
												<input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
													<a href="read_order_book.php" class="btn btn-danger">Cancel</a>
										</div>
									</div>
								</form>	
							</div>
                        </div>
                </div>
            </div>				
		</div>		
	</div>			
</div>


	<?php 	
		if(isset($_REQUEST['btn_insert']))
		{
			try
			{				

				
				$book = $_REQUEST['book']; 
				$price = $_REQUEST['price']; 
								
				if(empty($book)){
					$errorMsg = "please Enter the book";					
				} else if (empty($price)) {
					$errorMsg = "please Enter price";	
				}
				
				  		

				  		if(!isset($errorMsg)){
				  			$insert_stmt = $connection->prepare('INSERT INTO book(book, price)VALUES(:book, :price )'); // sql insert query
				  				
				  				$insert_stmt->bindParam(':book', $book); // bind all parameter
				  				$insert_stmt->bindParam(':price', $price); 
				  								  				
				  				if($insert_stmt->execute()){
				  					$insertMsg="File Upload Successfully."; // execute query success message
				  					header("refresh:1;create_book.php"); //refresh 3 second and redirext to the read page
				  				}
				  		}

				}
				catch(PDOException $e){
					echo $e->getMessage();
				}

			}
		
	 ?>

