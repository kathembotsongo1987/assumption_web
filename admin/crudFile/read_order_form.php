
<?php 
      require_once 'header.php'; 
      require_once 'dbconnection.php';


if(isset($_REQUEST['delete_id'])){
    // select image from database to delete
    $id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

    $select_stmt = $connection->prepare('SELECT * FROM order_form WHERE id =:id'); // sql select query
    $select_stmt->bindParam(':id',$id);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        // delete an original record from database
    $delete_stmt = $connection->prepare('DELETE FROM order_form WHERE id =:id');
    $delete_stmt->bindParam(':id',$id);
    $delete_stmt->execute();

    header("Location:read_order_form.php");
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
<table class="table table-striped table-bordered table-hover" style="text-align: center;">
    <thead>
        <tr>
            <th style="text-align: center;">id</th>
            <th style="text-align: center;">Full Name</th>
            <th style="text-align: center;">Town of Diocese</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Email</th>
            <th style="text-align: center;">Phone</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Copies</th>
           
        </tr>
    </thead>
    <tbody>
        <?php 
            $select_stmt = $connection->prepare("SELECT * FROM order_form"); //sql select query
            $select_stmt->execute();
            while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
            {
                ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['town_diocese']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['select_book']; ?></td>
                        <td><?php echo $row['select_copies']; ?></td>
                        <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                <?php 

                    }
                    
                    ?>
                
    </tbody>
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


