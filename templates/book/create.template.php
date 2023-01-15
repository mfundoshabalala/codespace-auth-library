<?php require 'templates/partials/head.php'; ?>
<?php require 'templates/partials/header.php'; ?>
<?php require 'templates/partials/banner.php'; ?>

<form method="post" class="max-w-3xl">
	<div class="flex flex-wrap justify-center w-full gap-4 p-6 border">
		<section class="flex-1">
			<h2>Book information:</h2>
			<div class="form-control">
				<label for="bookName">Name</label>
				<input type="text" name="bookName"
					placeholder="Enter book name" />
			</div>
			<div class="form-control">
				<label for="bookYear">Year</label>
				<input type="number" min="1000" name="bookYear"
					placeholder="Enter book year" />
			</div>
			<div class="form-control">
				<label for="bookGenre">Genre</label>
				<input type="text" name="bookGenre"
					placeholder="Enter book genre" />
			</div>
			<div class="form-control">
				<label for="bookAgeGroup">Age Group</label>
				<input type="text" name="bookAgeGroup"
					placeholder="Enter book age group" />
			</div>
		</section>
		<section class="flex-1">
			<h2>Author information:</h2>
			<div class="form-control">
				<label for="authorName">Name</label>
				<input type="text" name="authorName"
					placeholder="Enter author name" />
			</div>
			<div class="form-control">
				<label for="authorGenre">Genre</label>
				<input type="text" name="authorGenre"
					placeholder="Enter author genre" />
			</div>
			<div class="form-control">
				<label for="authorAge">Age</label>
				<input type="text" name="authorAge"
					placeholder="Enter author age group" />
			</div>
		</section>
	</div>
	<div class="flex justify-center w-full p-6">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>


<?php require 'templates/partials/footer.php'; ?>
