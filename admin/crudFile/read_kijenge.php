


<?php
require_once 'header.php';   
require_once 'dbconnection.php';
$sql = 'SELECT * FROM kijenge';

$statement = $connection->prepare($sql);

$statement->execute();

$email_monica = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>


<div class="wrapper">
    
    <div class="container">
            
        <div class="col-lg-12">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 style="text-transform: uppercase; text-align: center; color: blue;">box emails Sts Peter and Paul kijenge Parish</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                <tr>
                    <th>id</th>
                    <th>mail</th>
                    <th>message</th>
                    <th>received</th>                                    
                </tr>

                <?php foreach($email_monica as $visitors): ?>

                <tr>
                    <td><?= $visitors->id; ?></td>                   
                    <td><?= $visitors->Email; ?></td>
                    <td><?= $visitors->Message; ?></td>                    
                    <td><?= $visitors->sent; ?></td>
                    <td>                        
                        <a onclick="return confirm('Are you sure you want to mark this email as read? <?= $visitors->id; ?>?')" href="#" style="background-color: rgb(15,205,55,0.4); border-radius:5%; padding: 5px;" class="btn btn-success">Read</a>

                    </td>
                </tr>

            <?php endforeach; ?>

           </table>
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



   
  