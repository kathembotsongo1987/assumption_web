
 <?php  session_start(); ?>
 <?php require 'dbconnection.php'; ?>  

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="documents/css/DT_bootstrap.css">	
        <script src="../../js/js_font.js"></script>        
    </head>
    <body>
    	<header>
    		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            	<?php  
            		if(isset($_SESSION["username"]))  
            		{  
             		echo '<h3 style="color:white;">Welcome - '.$_SESSION["username"].', enjoy our service</h3>'; 
            		}  
           		 	else  
                	{  
                	header("location:../../login/login_religious.php");  
                	}  
                	?>
           			<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
           				
           			</form>
            			<a class="nav-link" href="../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
            		<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">                               
                				<?php echo '<br /><br /><a style="color:white;" href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>'; ?>
            		</ul>
    		</nav>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
			   		<div class="container">
						<br />
						<h1 style="text-align: center;">Download Documents</h1>
						<hr>				
	
							
							</form>
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
									<thead>
										<tr>
											<th width="90%" align="center">Documents</th>
											<th style="text-align: center;">Download</th>	
										</tr>
									</thead>
									<?php
										$query=$connection->query("select * from upload order by id desc");
										while($row=$query->fetch()){
										$name=$row['name'];
									?>
									<tr>			
										<td>&nbsp;<?php echo $name ;?></td>
										<td>
											<button class="alert-success"><a href="documents/download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>"><i style="margin-left: 50px;" class="fas fa-download"></i></a></button>
										</td>
									</tr>
									<?php }?>
								</table>	
						</div>
					</div>
			</div>
		</div>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>
</body>
</html>

<?php require 'layout_footer.php' ;?>

			
	