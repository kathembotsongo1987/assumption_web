


<?php
require_once 'header.php';   
require_once 'dbconnection.php';
$sql = 'SELECT * FROM email_visitors';

$statement = $connection->prepare($sql);

$statement->execute();

$email_visitors = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>


<div class="wrapper">    
    <div class="container">            
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="text-transform: uppercase; text-align: center; color: blue;">box emails from our web visitors</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                                <tr>
                                    <th>id</th>
                                    <th>mail</th>
                                    <th>message</th>
                                    <th>received</th>                                    
                                </tr>

                                <?php foreach($email_visitors as $visitors): ?>

                                    <tr>
                                        <td><?= $visitors->id; ?></td>                   
                                        <td><?= $visitors->mail; ?></td>
                                        <td><?= $visitors->message; ?></td>                    
                                        <td><?= $visitors->sent; ?></td>
                                        <td>                        
                                        <a onclick="return confirm('Are you sure you want to mark this email as read? <?= $visitors->id; ?>?')" href="#" style="background-color: rgb(15,205,55,0.4); border-radius:5%; padding: 5px;" class="btn btn-success">Read</a>
                                        </td>
                                    </tr>

                                    <?php endforeach; ?>

                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            
</div>



   
  