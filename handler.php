<?php 	
	$handler = new PDO('mysql:host=localhost;dbname=newaadb', 'root', '');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
     die();    
    } ?>