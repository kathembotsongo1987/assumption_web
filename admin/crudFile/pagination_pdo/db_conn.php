<?php
 	
$db_host="localhost"; // Localhost server
$db_user="root"; // database username
$db_password=""; // database password
$db_name="aadb"; // database name

try {
	$connection=new PDO("mysql:host={$db_host}; dbname={$db_name}",$db_user,$db_password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
Catch(PDOEXCEPTION $e){
	$e->getMessage();
}

?>