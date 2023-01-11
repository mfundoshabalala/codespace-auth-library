<?php
include_once '../../modules/User/User.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$user = new User($username, $password);
	$login = $user->login($username, $password);

	if ($login) {
		echo "Login successful!";
	} else {
		echo "Login failed!";
	}
}
