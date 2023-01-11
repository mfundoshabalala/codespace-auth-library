<?php
include_once '../../modules/User/User.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!isset($_POST['username'], $_POST['password'])) {
		// Could not get the data that should have been sent.
		exit('Please fill both the username and password fields!');
	}

	if (empty($_POST['username']) || empty($_POST['password'])) {
		// One or more values are empty.
		exit('Please fill both the username and password fields!');
	}

	$user = new User($username, $password);

	$userExists = $user->userExists($username);
	if ($userExists) {
		// User already exists
		echo 'User already exists!';
		exit;
	}

	$register = $user->register($username, $password);

	if ($register) {
		echo "Registration successful!";
		header('Location: ../login');
		exit;
	} else {
		echo "Registration failed!";
		exit;
	}
}
