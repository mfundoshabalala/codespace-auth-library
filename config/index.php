<?php

return $config = [
	'database' => [
		'hostname' => 'localhost',
		'database' => 'library',
		'port' => null,
		'socket' => null
	],
	'auth' =>
	[
		'username' => 'root',
		'password' => null
	],
	'routes' => [
		'/' => 'controllers\index.php',
		'/about' => 'controllers\about.php',
		'/books' => 'controllers\books.php',
		'/book' => 'controllers\book\index.php',
		'/book/create' => 'controllers\book\create.php',
		'/book/edit' => 'controllers\book\edit.php',
		'/book/delete' => 'controllers\book\delete.php',
		'/register' => 'controllers\register.php',
		'/login' => 'controllers\login.php',
		'/forgot-password' => 'controllers\forgot-password.php',
		'/reset-password' => 'controllers\reset-password.php',
		'/profile' => 'controllers\profile.php',
	],
	'services' => [
		'prerender' => [
			'enabled' => false,
			'token' => 'YOUR TOKEN HERE',
			'secret' => 'YOUR SECRET HERE'
		],
	]
];
