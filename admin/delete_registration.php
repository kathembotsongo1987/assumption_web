<?php 	
	
	include('functions.php');
	if(isset($_GET['id'])){
		$database = new Connection();
		$db = $database->open();

		try{
			$sql = "DELETE FROM registration WHERE id = '".$_GET['id']."'";
			// if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Member deleted successfully' : 'Something went wrong. Cannot delete member';
			
			}
			catch(PDOException $e){
				$_SESSION['message'] = $e->getMessage();
			}
			//Close connection
			$database->close();
		}
		else{
			$_SESSION['message'] = 'Select member to delete first';
		}
		header('location:read_registration.php');
	 ?>	
