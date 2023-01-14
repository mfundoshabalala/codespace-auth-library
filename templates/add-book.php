<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
	header('Location: ./login.php');
	exit;
}

$role = strtolower($_SESSION['role']);

if ($role === 'librarian') {
	echo "You can add books";
} else {
	echo "You can't add books";
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Local Library | Add Books</title>
	</head>

	<body>
		<!--  -->
		<form action="../includes/add-book-include.php" method="post">

		</form>
	</body>

</html>
