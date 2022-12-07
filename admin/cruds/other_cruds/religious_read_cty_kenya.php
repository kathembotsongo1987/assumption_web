
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
        <title></title>
        <link href="../../css/styles.css" rel="stylesheet" />
        <script src="../../js/js_font.js"></script>        
    </head>
    <body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <?php  
            if(isset($_SESSION["username"]))  
            {  
             echo '<h3 style="color:white;">Welcome - '.$_SESSION["username"].', enjoy our service</h3>'; 
            }  
            else  
                {  
                header("location:../../../login/login_religious.php");  
                }  
                ?>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">                               
                <?php echo '<br /><br /><a style="color:white;" href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>'; ?>
            </ul>
    </nav>
<div class="wrapper">	
	<div class="container">			
		<div class="col-lg-12">
		    <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 style="text-align: center;">COMMUNITIES IN KENYA</h1>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" style="text-align: center;">
							<thead>
								<tr>			
									<th style="text-align: center;">COMMUNITY</th>
									<th style="text-align: center; text-transform: uppercase;">Diocese</th>			
								</tr>
							</thead>
							<tbody>
								<?php 
									$select_stmt = $connection->prepare("SELECT * FROM communitieskenya"); //sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>

										<tr>												
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['diocese']; ?></td>			
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

<?php require 'layout_footer.php' ?>


