<?php require 'partials/head.php'; ?>
<?php require 'partials/header.php'; ?>
<?php require 'partials/banner.php'; ?>


<section class="wrapper">
	<div>
		<div>
			<h1>Welcome Back to the World of Knowledge</h1>
			<h2>Please sign in to access our collection</h2>
			<form action="../includes/login-include.php" method="post">
				<div class="form-control">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" placeholder="Enter username">
				</div>
				<div class="form-control">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter email">
				</div>
				<div class="form-control">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="Enter password">
				</div>
				<div class="items-inline"></div>
				<input type="submit" name="submit" class="btn btn-primary" value="Login">
			</form>
			<!-- dont have an account and forgot password -->
			<div class="flex justify-center">
				<p><a href="/forgot-password">Forgot password?</a>
				</p>
				<p>Don't have an account? <a href="/register">Register</a>
				</p>
			</div>
		</div>
	</div>
	<div>
		<img src="../public/images/library-1.jpg" alt="books image in library">
	</div>
</section>

<?php require 'partials/footer.php'; ?>