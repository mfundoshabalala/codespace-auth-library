<?php require 'templates/partials/head.php'; ?>
<?php require 'templates/partials/header.php'; ?>
<?php require 'templates/partials/banner.php'; ?>

<!-- ui for displaying a single book using tailwindcss -->
<div class="container mx-auto px-4 max-w-5xl">
	<div class="flex flex-wrap -mx-1 lg:-mx-4">
		<div class="my-1 px-1 w-full lg:my-4 lg:px-4 lg:w-1/2">
			<article class="overflow-hidden rounded-lg shadow-lg">
				<a href="#">
					<img alt="Placeholder" class="block h-auto w-full"
						src="https://picsum.photos/600/400/?random">
				</a>
				<header
					class="flex items-center justify-between leading-tight p-2 md:p-4">
					<h1 class="text-lg">
						<a class="no-underline hover:underline text-black"
							href="#">
							<?= $book['book_name']; ?>
						</a>
					</h1>
					<p class="text-grey-darker text-sm">
						<?= $book['author_name']; ?>
					</p>
				</header>
				<footer
					class="flex items-center justify-between leading-none p-2 md:p-4">
					<a class="flex items
					center no-underline hover:underline text-black" href="#">
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
