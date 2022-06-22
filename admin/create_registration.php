<?php 
	session_start();
	include('functions.php');

	if(isset($_POST['submits'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//Prepare statement for inserting data into the database
			$stmt = $db->prepare("INSERT INTO registration(name, email, password) values (:name, :email, :password)");
			// if-else statement in executing our insert statement
			$_SESSION['email'] = ($stmt->execute(array(':name' => $_POST['name'], ':email' => $_POST['email'], ':password' => md5($_POST['password'])))) ? 'Member added successfully' : 'Something went wrong. Cannot add member';
		}
		catch(PDOException $exception){
			$_SESSION['message'] = $exception->getMessage();
		}
		// Close connection
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
	}
	header('location:read_registration.php');
 ?>
