<?php require 'templates/partials/head.php'; ?>
<?php require 'templates/partials/header.php'; ?>
<?php require 'templates/partials/banner.php'; ?>

<!-- ui for displaying a single book using tailwindcss -->
<div class="container max-w-5xl px-4 mx-auto">
	<div class="flex flex-wrap -mx-1 lg:-mx-4">
		<div class="w-full px-1 my-1 lg:my-4 lg:px-4 lg:w-1/2">
			<article class="overflow-hidden rounded-lg shadow-lg">
				<a href="#">
					<img alt="Placeholder" class="block w-full h-auto" src="https://picsum.photos/600/400/?random">
				</a>
				<header class="flex items-center justify-between p-2 leading-tight md:p-4">
					<h1 class="text-lg">
						<a class="no-underline hover:underline" href="#">
							<?= $book['book_name']; ?>
						</a>
					</h1>
					<p class="text-sm">
						<?= $book['author_name']; ?>
					</p>
				</header>
				<footer class="flex items-center justify-between p-2 leading-none md:p-4">
					<a class="flex no-underline items center hover:underline" href="#">
						<p class="ml-2 text-sm">
							<?= $book['genre']; ?>
						</p>
					</a>
				</footer>
			</article>
		</div>
	</div>
</div>

<?php require 'templates/partials/footer.php'; ?>