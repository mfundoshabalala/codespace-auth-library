<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
	header('Location: ./login.php');
	exit;
}

$role = strtolower($_SESSION['role']);

if ($role !== 'librarian') {
	// header('Location: ./index.php');
	echo "<h1>You do not have persmission for this page</h1>";
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
	<title>Local Library | Add Books</title>
</head>

<body>
	<main>
		<h1>Add a book</h1>
		<!--  -->
		<form action="../includes/add-book-include.php" method="post">
			<div class="flex flex-wrap justify-center w-full gap-4 p-6 border ">
				<section class="min-w-md">
					<h2>Book information:</h2>
					<div class="form-control">
						<label for="bookName">Name</label>
						<input type="text" name="bookName" placeholder="Enter book name" />
					</div>
					<div class="form-control">
						<label for="bookYear">Year</label>
						<input type="number" min="1000" name="bookYear" placeholder="Enter book year" />
					</div>
					<div class="form-control">
						<label for="bookGenre">Genre</label>
						<input type="text" name="bookGenre" placeholder="Enter book genre" />
					</div>
					<div class="form-control">
						<label for="bookAgeGroup">Age Group</label>
						<input type="text" name="bookAgeGroup" placeholder="Enter book age group" />
					</div>
				</section>
				<section class="min-w-md">
					<h2>Author information:</h2>
					<div class="form-control">
						<label for="authorName">Name</label>
						<input type="text" name="authorName" placeholder="Enter author name" />
					</div>
					<div class="form-control">
						<label for="authorGenre">Genre</label>
						<input type="text" name="authorGenre" placeholder="Enter author genre" />
					</div>
					<div class="form-control">
						<label for="authorAge">Age</label>
						<input type="text" name="authorAge" placeholder="Enter author age group" />
					</div>
				</section>
			</div>
		</form>
	</main>
</body>

</html>