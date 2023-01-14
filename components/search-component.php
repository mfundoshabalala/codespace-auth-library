<?php
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../dist/output.css">
	</head>

	<body>
		<form action="../includes/search-include.php" method="post"
			class="mx-auto min-w-max p-4">
			<input type="text" name="search"
				placeholder="Search for book, author or genre" />
			<div class="flex justify-around gap-2">
				<input type="submit" name="submit" value="Search"
					class="btn-secondary" />
				<input type="reset" name="reset" value="Reset"
					class="btn-danger" />
			</div>
		</form>
	</body>

</html>
