
<?php require 'dbconnection.php'; ?> 


<?php require 'layout_header.php'; ?>

<?php
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
 $move =  move_uploaded_file($temp,"upload/".$fname);
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
<html>
	<link href="documents/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="documents/css/DT_bootstrap.css">
	<script src="documents/js/jquery.js" type="text/javascript"></script>
	<script src="documents/js/bootstrap.js" type="text/javascript"></script>	
	<script type="text/javascript" charset="utf-8" language="javascript" src="documents/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="documents/js/DT_bootstrap.js"></script>

<body>
	    <div class="row-fluid">
	        <div class="span12">
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
					<th align="center">Download</th>	
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
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
</body>
</html>

<?php require 'layout_footer.php' ;?>

			
	