<?php   


try {
    
   $handler = new PDO('mysql:host=127.0.0.1;dbname=aadb', 'root', '');
   $handler->setAttribute(PDO::ATTR_ERRMORE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo $e->getMessage();
	die();
    
}

$query=$handler->query('SELECT * FROM tanzania_location');
if($query->rowCount()){
	echo $query;
}else{
	echo 'No result';
}

 ?>