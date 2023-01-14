<header>
	<nav>
		<div>
			<a href="/library-app/" class="logo">Local Library</a>
		</div>
		<ul>
			<li><a href="/library-app/">Home</a></li>
			<li><a href="/library-app/templates/catalogue.php">Books</a></li>
			<li><a href="/library-app/templates/add-book.php">Add books</a></li>
		</ul>
		<?php
		if (isset($_SESSION['logged_in'])) {
			echo '<form action="/library-app/includes/logout-include.php" method="post">
						<input type="submit" name="submit" value="Logout" class="btn-danger">
					</form>';
		} else {
			echo '
			<ul>
				<li><a href="/library-app/templates/login.php">Login</a></li>
				<li><a href="/library-app/templates/register.php">Register</a></li>
			</ul>
			';
		}
		?>
	</nav>
</header>
