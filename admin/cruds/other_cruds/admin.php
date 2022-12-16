<center>
	<h1>religious Page</h1>

	<h3>
		<?php 

		session_start();

		if(!isset($_SESSION['religious_login']))
		{
			header("location:../../../login/login.php");
		}

		if(isset($_SESSION['admin_login']))
		{
			header("location:religious.php");
		}

		if(isset($_SESSION['vd_login']))
		{
			header("location:vd.php");
		}

		if(isset($_SESSION['candidate_login']))
		{
			header("location:candidate.php");
		}

		if(isset($_SESSION['religious_login']))
		{
		?>

		Welcome,

		<?php 
		echo $_SESSION['religious_login'];
		}
		 ?>	
				 
	</h3>
	<a href="../../../login/logout.php">Logout</a>
</center>

			
	