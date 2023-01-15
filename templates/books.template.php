<?php require 'partials/head.php'; ?>
<?php require 'partials/header.php'; ?>
<?php require 'partials/banner.php'; ?>

<table
	class="shadow table-fixed border-separate border-spacing-0.5 border border-slate-200">
	<thead class="text-left font-light">
		<tr>
			<th class="border border-slate-400 px-3 py-1">Id</th>
			<th class="border border-slate-400 px-3 py-1">Book Name</th>
			<th class="border border-slate-400 px-3 py-1">Genre</th>
			<th class="border border-slate-400 px-3 py-1">Year</th>
			<th class="border border-slate-400 px-3 py-1">Age Group</th>
			<th class="border border-slate-400 px-3 py-1">Author</th>
			<th class="border border-slate-400 px-3 py-1">Age</th>
		</tr>
	</thead>
	<tbody class="font-light text-black">
		<?php foreach ($books as $book) : ?>
		<tr>
			<td class="border border-slate-300 px-3 py-1">
				<?php echo $book['book_id']; ?>
			</td>
			<td class="border border-slate-300 px-3 py-1"><a
					href="/book?id=<?= $book['book_id'] ?>"
					class="text-blue-900 hover:underline"><?php echo $book['book_name']; ?></a>
			</td>
			<td class="border border-slate-300 px-3 py-1">
				<?php echo $book['genre']; ?>
			</td>
			<td class="border border-slate-300 px-3 py-1">
				<?php echo $book['year']; ?>
			</td>
			<td class="border border-slate-300 px-3 py-1">
				<?php echo $book['age_group']; ?></td>
			<td class="border border-slate-300 px-3 py-1">
				<?php echo $book['author_name']; ?></td>
			<td class="border border-slate-300 px-3 py-1">
				<?php echo $book['age']; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php require 'partials/footer.php'; ?>
