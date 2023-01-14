<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
	header('Location: ./login.php');
	exit;
}
// get user role from session
$role = strtolower($_SESSION['role']);
// get the book list
include_once '../modules/Book/Book.php';
$book = new Book();

if (isset($_GET['search'])) {
	$search = $_GET['search'];
	if (strtolower($_SESSION['role']) == 'librarian') {
		$bookList = $book->searchBookAuthor($search);
	} else {
		$bookList = $book->searchBook($search);
	}
	unset($_GET['search']);
} else {
	$bookList = $book->getAllBooks();
}

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../dist/output.css">
		<title>Local Library | Book Catalogue</title>
	</head>

	<body>
		<?php require_once __DIR__ . '/../includes/header.php'; ?>
		<h1>Book Catalogue</h1>
		<?php include_once __DIR__ . '/../components/search-component.php'; ?>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Book Name</th>
					<th>Genre</th>
					<th>Year</th>
					<th>Age Group</th>
					<th>Author</th>
					<th>Age</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($bookList as $book) : ?>
				<tr>
					<td><?php echo $book['book_id']; ?></td>
					<td><?php echo $book['book_name']; ?></td>
					<td><?php echo $book['genre']; ?></td>
					<td><?php echo $book['year']; ?></td>
					<td><?php echo $book['age_group']; ?></td>
					<td><?php echo $book['author_name']; ?></td>
					<td><?php echo $book['age']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>

</html>
