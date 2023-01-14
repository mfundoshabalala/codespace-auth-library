<?php
include_once '../modules/User/User.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
		// Could not get the data that should have been sent.
		exit('Please complete the registration form');
	}

	if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
		// One or more values are empty.
		exit('Please complete the registration form');
	}

	$user = new User($username, $email, $password);

	$userExists = $user->userExists($username, $email);
	if ($userExists) {
		// User already exists
		echo 'User already exists!';
		exit;
	}

	$register = $user->register($username, $email, $password);

	if ($register) {
		echo "Registration successful!";
		header("Location: ../templates/login.php");
		exit;
	} else {
		echo "Registration failed!";
		exit;
	}
}
