
<?php require 'dbconnection.php'; ?> 
<?php
if(isset($_REQUEST['delete_id'])){
	// select image from database to delete
	$id = $_REQUEST['delete_id']; // get delete_id and store in $id variable

	$select_stmt = $connection->prepare('SELECT * FROM upload WHERE id =:id'); // sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("documents/upload/".$row['name']); //unlink function permanently remove your file

	// delete an original record from database
	$delete_stmt = $connection->prepare('DELETE FROM upload WHERE id =:id');
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();

	header("Location:upload_documents.php");
}

if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $connection->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $connection->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"documents/upload/".$fname);
 if($move){
 	$query=$connection->query("insert into upload(name,fname)values('$name','$fname')");
	if($query){
	header("location:upload_documents.php");
	}
	else{
	die(mysql_error());
	}
 }
}
?>

<?php require 'layout_header.php'; ?>
<html> 
<header>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="documents/css/DT_bootstrap.css">	
</header>
<body>

		<div class="container">
		<div class="row">
			<div class="col-md-12">
			   <div class="container">
				<br />
				<h1 style="text-align: center;">Upload  And  Download Files</h1><hr>	
				
	
			<form enctype="multipart/form-data" action="" name="form" method="post">
				Select File
				<div>
					<td><input type="file" name="file" id="file" /></td>
					<td><input type="submit" name="submit" id="submit" value="Submit" /></td>
				</div>
			</form>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Documents</th>
					<th style="text-align: center;">Download</th>	
					<th style="text-align: center;">Delete</th>	
				</tr>
			</thead>
			<?php
			$query=$connection->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="alert-success"><a href="documents/download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>"><i style="margin-left: 50px;" class="fas fa-download"></i></a></button>
				</td>
				<td>
					<button class="alert-success"><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger"><i style="margin-left: 50px;" class="fas fa-trash"></i></a></button>
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

			
	