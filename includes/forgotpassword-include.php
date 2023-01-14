<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	// query the database to check if the email exists
	$user = checkEmail($email);
	if ($user) {
		// generate a unique token
		$token = generateToken();
		// store the token, email and timestamp in the database
		storeToken($token, $email);
		// send an email to the user with a link to reset the password
		sendResetLink($email, $token);
		echo 'An email has been sent to your email address with instructions on how to reset your password.';
	} else {
		echo 'The email you entered is not associated with any account.';
	}
}
function checkEmail($email)
{
	// query the database and return the user with the matching email
}
function generateToken()
{
	// generate a unique token
}
function storeToken($token, $email)
{
	// store the token, email and timestamp in the database
}
function sendResetLink($email, $token)
{
	// send an email to the user with a link to reset the password
}
