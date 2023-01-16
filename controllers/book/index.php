<?php
require 'config/index.php';
// get the book by its id from the database and require the template
$db = new Database($config['database']);
$book = $db->query("SELECT * FROM books_authors WHERE book_id = ?", [$_GET['id']]);
// dd($book);
// get a list of books by the same author
// $books = $db->query();


// set the heading, query the database for book and require the template
$heading = 'Unlock the Pages of Knowledge';
$gradient = 'from-slate-700 via-teal-600 to-slate-700';
require 'templates/book/index.template.php';
