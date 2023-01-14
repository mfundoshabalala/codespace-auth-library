<?php
if (isset($_GET['submit'])) {
	$email = $_GET['email'];
	$password = $_GET['password'];
	$password2 = $_GET['password2'];
	$terms = $_GET['terms'];
	$errors = array();
	if (empty($email)) {
		$errors['email'] = 'Email is required';
	}
	if (empty($password)) {
		$errors['password'] = 'Password is required';
	}
	if (empty($password2)) {
		$errors['password2'] = 'Confirm Password is required';
	}
	if (empty($terms)) {
		$errors['terms'] = 'You must agree to the terms and conditions';
	}
	if ($password != $password2) {
		$errors['password2'] = 'Passwords do not match';
	}
	// if (count($errors) == 0) {
	// 	// register user
	// 	$password
	// 		= password_hash($password, PASSWORD_DEFAULT);
	// 	$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
	// 	if (mysqli_query($conn, $sql)) {
	// 		// login user
	// 		// get id of the created user
	// 		$logged_in_user_id = mysqli_insert_id($conn);
	// 		$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
	// 		$_SESSION['message'] = 'You are now logged in';
	// 		header('location: index.php');
	// 		exit(0);
	// 	} else {
	// 		$errors['db_error'] = 'Database error: failed to register';
	// 	}
	// }
}


?>

<!-- user registration form -->
<form action="register.php" method="post">
	<input type="email" name="email" placeholder="Email" required>
	<input type="password" name="password" placeholder="Password" required>
	<input type="password" name="password2" placeholder="Confirm Password"
		required>
	<input type="checkbox" name="terms" required> I agree to the terms and
	conditions of this site.
	<input type="submit" name="register" value="Register">
</form>
