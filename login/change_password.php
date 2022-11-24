<?php include 'change_password_process.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container p-3 border-5 rounded-3" style="width: 40%; background-color: rgba(15,52,15,.2);">
	<h1 class="display-6 text-center p-2 gb-light">Change Password</h1>
	<form action="" method="post">
		<div class="row mb-3 justify-content-md-center">
			<label for="inputEmail" class="col-3 col-form-label">Email</label>
			<div class="col-lg-auto">
				<input type="email" name="email" id="inputEmail" required>
			</div>
		</div>
		<div class="row mb-3 justify-content-md-center">
			<label for="inputPassword" class="col-4 col-form-label">New Password</label>
			<div class="col-lg-auto">
				<input type="password" name="new_password" id="inputPassword" class="form-control" required>
			</div>
		</div>
		<div class="row mb-3 justify-content-md-center">
			<div class="col-5">
				<button type="submit" name="change" class="col-form-label">Change</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>