<?php
include_once '../modules/User/User.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$user = new User($username, $email, $password);

	$userExists = $user->userExists($username, $email);
	if (!$userExists) {
		// User does not exist
		echo 'User does not exist!';
		exit;
	}

	$login = $user->login($username, $email, $password);

	if ($login) {
		echo "Login successful!";
		header("Location: ../templates/catalogue.php");
		exit;
	} else {
		echo "Login failed!";
		exit;
	}
}
