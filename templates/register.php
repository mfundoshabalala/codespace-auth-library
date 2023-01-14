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
		<title>Local Library | Register</title>
	</head>

	<body>
		<section class="wrapper">
			<div>
				<img src="../public/images/library-2.jpg"
					alt="books image in library">
			</div>
			<div>
				<div>
					<h1 class="library-heading">Unlock the Door to Endless
						Possibilities</h1>
					<h2 class="library-subheading">Please register to access our
						collection</h2>
					<form action="../includes/register-include.php"
						method="post">
						<div class="form-control">
							<label for="username">Username</label>
							<input type="text" name="username" id="username"
								placeholder="John Doe">
						</div>
						<div class="form-control">
							<label for="email">Email</label>
							<input type="email" name="email" id="email"
								placeholder="john.doe@email.com">
						</div>
						<div class="form-control">
							<label for="password">Password</label>
							<input type="password" name="password" id="password"
								placeholder="Password">
						</div>
						<div class="form-control">
							<label for="confirmPassword">Confirm
								password</label>
							<input type="password" name="confirmPassword"
								id="confirmPassword"
								placeholder="Repeat your password">
						</div>
						<div class="items-inline">
							<label for="terms">I agree to the terms and
								conditions</label>
							<input type="checkbox" name="terms" id="terms">
						</div>
						<input type="submit" name="submit"
							class="btn btn-primary" value="Register">
					</form>
					<p>Already have an account? <a href="./login.php">Login</a>
					</p>
				</div>
			</div>
		</section>
	</body>

</html>
