<?php   


try {
    
   $handler = new PDO('mysql:host=localhost;dbname=aadb', 'root', '');
   $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo $e->getMessage();
	die();
    
}

$query=$handler->query('SELECT * FROM tanzania_location');
if($query->rowCount()){
	ECHO $query->rowCount();
}else{
	echo 'No result';
}

 ?>