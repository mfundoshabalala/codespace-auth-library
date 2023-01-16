<?php require 'partials/head.php'; ?>
<?php require 'partials/header.php'; ?>
<?php require 'partials/banner.php'; ?>

<main class="py-8 overflow-y-scroll flex-1">
	<table
		class="mx-auto shadow table-fixed border-separate border-spacing-0.5 border border-slate-800">
		<thead class="font-light text-left text-gray-400">
			<tr>
				<th class="px-3 py-1 border border-slate-600">Id</th>
				<th class="px-3 py-1 border border-slate-600">Book Name</th>
				<th class="px-3 py-1 border border-slate-600">Genre</th>
				<th class="px-3 py-1 border border-slate-600">Year</th>
				<th class="px-3 py-1 border border-slate-600">Age Group</th>
				<th class="px-3 py-1 border border-slate-600">Author</th>
				<th class="px-3 py-1 border border-slate-600">Age</th>
			</tr>
		</thead>
		<tbody class="font-light text-white">
			<?php foreach ($books as $book) : ?>
			<tr>
				<td class="px-3 py-1 text-center border border-slate-700">
					<?php echo $book['book_id']; ?>
				</td>
				<td class="px-3 py-1 border border-slate-700"><a
						href="/book?id=<?= $book['book_id'] ?>"
						class="text-blue-100 hover:underline"><?php echo $book['book_name']; ?></a>
				</td>
				<td class="px-3 py-1 border border-slate-700">
					<?php echo $book['genre']; ?>
				</td>
				<td class="px-3 py-1 text-center border border-slate-700">
					<?php echo $book['year']; ?>
				</td>
				<td class="px-3 py-1 border border-slate-700">
					<?php echo $book['age_group']; ?></td>
				<td class="px-3 py-1 border border-slate-700">
					<?php echo $book['author_name']; ?></td>
				<td class="px-3 py-1 text-center border border-slate-700">
					<?php echo $book['age']; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</main>

<?php require 'partials/footer.php'; ?>
