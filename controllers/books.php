<?php

require 'config/index.php';
// database instance and query the view and return all books
$db = new Database($config['database']);
$books = $db->query('SELECT * FROM books_authors');
// set the heading and require the template
$heading = 'Library Collection';
require 'templates/books.template.php';
