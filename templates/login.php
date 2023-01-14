<?php

session_start();
if (isset($_SESSION['logged_in'])) {
	header('Location: ../index.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../dist/output.css">
		<title>Local Library | Login</title>
	</head>

	<body>
		<section class="wrapper">
			<div>
				<div>
					<h1>Welcome Back to the World of Knowledge</h1>
					<h2>Please sign in to access our collection</h2>
					<form action="../includes/login-include.php" method="post">
						<div class="form-control">
							<label for="username">Username</label>
							<input type="text" name="username" id="username"
								placeholder="Enter username">
						</div>
						<div class="form-control">
							<label for="email">Email</label>
							<input type="email" name="email" id="email"
								placeholder="Enter email">
						</div>
						<div class="form-control">
							<label for="password">Password</label>
							<input type="password" name="password" id="password"
								placeholder="Enter password">
						</div>
						<div class="items-inline"></div>
						<input type="submit" name="submit"
							class="btn btn-primary" value="Login">
					</form>
					<!-- dont have an account and forgot password -->
					<div class="flex justify-center">
						<p><a href="./forgot-password.php">Forgot password?</a>
						</p>
						<p>Don't have an account? <a
								href="./register.php">Register</a></p>
					</div>
				</div>
			</div>
			<div>
				<img src="../public/images/library-1.jpg"
					alt="books image in library">
			</div>
		</section>
	</body>

</html>
