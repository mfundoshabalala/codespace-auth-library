<?php
require 'config/index.php';
$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// dd($_POST);
	$db->insert("INSERT INTO books (book_name, year, genre, age_group) VALUES (?, ?, ?, ?)", [
		$_POST['bookName'],
		$_POST['bookYear'],
		$_POST['bookGenre'],
		$_POST['bookAgeGroup'],
	]);

	$bookId = $db->lastInsertId();

	$db->insert("INSERT INTO authors (author_name, genre, age, book_id) VALUES (?, ?, ?, ?)", [
		$_POST['authorName'],
		$_POST['authorGenre'],
		$_POST['authorAge'],
		$bookId,
	]);
}

// set the heading and require the template
$heading = 'Add a Book to the Collection';
$gradient = 'from-slate-700 via-teal-600 to-slate-700';
require 'templates/book/create.template.php';
