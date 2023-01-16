<?php require 'templates/partials/head.php'; ?>
<?php require 'templates/partials/header.php'; ?>
<?php require 'templates/partials/banner.php'; ?>

<main class="flex-1 flex justify-center items-center py-8">
	<form method="post"
		class="max-w-4xl w-full border border-gray-700 rounded shadow bg-gray-900">
		<div class="flex flex-wrap justify-center w-full gap-24 p-12">
			<section class="flex-1">
				<h2>Book information:</h2>
				<div class="mt-2">
					<label class="block text-sm font-medium"
						for="bookName">Name</label>
					<input
						class="bg-gray-600 block w-full px-6 py-3 mt-1 text-gray-900 placeholder-gray-500 border-gray-300 rounded-md shadow-inner bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
						type="text" name="bookName"
						placeholder="Enter book name" />
				</div>
				<div class="mt-2">
					<label class="block text-sm font-medium"
						for="bookYear">Year</label>
					<input
						class="bg-gray-600 block w-full px-6 py-3 mt-1 text-gray-900 placeholder-gray-500 border-gray-300 rounded-md shadow-inner bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
						type="number" min="1000" name="bookYear"
						placeholder="Enter book year" />
				</div>
				<div class="mt-2">
					<label class="block text-sm font-medium"
						for="bookGenre">Genre</label>
					<input
						class="bg-gray-600 block w-full px-6 py-3 mt-1 text-gray-900 placeholder-gray-500 border-gray-300 rounded-md shadow-inner bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
						type="text" name="bookGenre"
						placeholder="Enter book genre" />
				</div>
				<div class="mt-2">
					<label class="block text-sm font-medium"
						for="bookAgeGroup">Age Group</label>
					<input
						class="bg-gray-600 block w-full px-6 py-3 mt-1 text-gray-900 placeholder-gray-500 border-gray-300 rounded-md shadow-inner bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
						type="text" name="bookAgeGroup"
						placeholder="Enter book age group" />
				</div>
			</section>

			<section class="flex-1">
				<h2>Author information:</h2>
				<div class="mt-2">
					<label class="block text-sm font-medium"
						for="authorName">Name</label>
					<input
						class="bg-gray-600 block w-full px-6 py-3 mt-1 text-gray-900 placeholder-gray-500 border-gray-300 rounded-md shadow-inner bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
						type="text" name="authorName"
						placeholder="Enter author name" />
				</div>
				<div class="mt-2">
					<label class="block text-sm font-medium"
						for="authorGenre">Genre</label>
					<input
						class="bg-gray-600 block w-full px-6 py-3 mt-1 text-gray-900 placeholder-gray-500 border-gray-300 rounded-md shadow-inner bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
						type="text" name="authorGenre"
						placeholder="Enter author genre" />
				</div>
				<div class="mt-2">
					<label class="block text-sm font-medium"
						for="authorAge">Age</label>
					<input
						class="bg-gray-600 block w-full px-6 py-3 mt-1 text-gray-900 placeholder-gray-500 border-gray-300 rounded-md shadow-inner bg-gray-50 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
						type="number" name="authorAge" min="1"
						placeholder="Enter author age group" />
				</div>
			</section>
		</div>
		<div class="flex justify-center w-full p-6 mb-4">
			<button type="submit"
				class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm whitespace-nowrap hover:bg-indigo-700">Put
				it in the
				shelf</button>
		</div>
	</form>
</main>

<?php require 'templates/partials/footer.php'; ?>
