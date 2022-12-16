
<?php 
include 'dbconnection.php'; 
 session_start();

$religious_id = $_SESSION['religious_id'];

if(!isset($religious_id)){
   header('location:../../../login/login.php');

} 
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="documents/css/DT_bootstrap.css">   
        <script src="../../js/js_font.js"></script> 
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <h3 style="color: white;">
                <?php
                    $select_profile = $connection->prepare("SELECT * FROM `religious_tb` WHERE id = ?");
                    $select_profile->execute([$religious_id]);
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>

            <img style="width: 100%; height: 50px; border-radius: 50%;" src="upload/<?= $fetch_profile['image']; ?>" alt="">
            <h3 style="color: white";><?= $fetch_profile['name']; ?></h3>
            <a style="color: blue;" href="../../../login/religious_profile_update.php" class="btn"><h4>update profile</h4></a>
        </h3>

            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">                               
                <?php echo '<br /><br /><a style="color:white;" href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>'; ?>
            </ul>
    </nav>       
    </head>

<body>  

<div class="row">
    <div class="wrapper">				
		<div class="col-lg-12">
			<div class="panel panel-default">
                    <div class="panel-heading">
                    	<h1 style="text-align: center;">RELIGIOUS IN KENYA</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Image</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Country</th>
                                        <th style="text-align: center;">Community</th>
                                        <th style="text-align: center;">Date T. V.</th>
                                        <th style="text-align: center;">Date P. V.</th>
                                        <th style="text-align: center;">Date diconate</th>
                                        <th style="text-align: center;">Date for Priesth</th>
                                        <th style="text-align: center;">Phone</th>
                                        <th style="text-align: center;">Email</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $select_stmt = $connection->prepare("SELECT * FROM religious_tb where cur_country='kenya'"); //sql select query
                                        $select_stmt->execute();
                                        while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
                                            {
                                                ?>

                                    <tr>
                                        <td><img src="upload/<?php echo $row['image']; ?>" width="100px" height="60px"></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['country']; ?></td>
                                        <td><?php echo $row['community']; ?></td>
                                        <td><?php echo $row['temp_v_date']; ?></td>
                                        <td><?php echo $row['perp_v_date']; ?></td>
                                        <td><?php echo $row['deaconate_date']; ?></td>
                                        <td><?php echo $row['priesthood_date']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
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


<?php require 'layout_footer.php' ?>