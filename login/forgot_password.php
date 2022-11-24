<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container p-3 border-5 rounded-3" style="width: 35%; background-color: rgba(15,52,15,.2); margin-top: 15%;">
	<h1 class="display-6 text-center p-2 gb-light">Password Reset</h1>
	<form action="forgot_password_process.php" method="post">
		<div class="row mb-3 justify-content-md-center">
			<div class="col-auto">
				<input type="email" name="email" placeholder="Email address" class="form-control">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary" name="reset">Reset Password</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>