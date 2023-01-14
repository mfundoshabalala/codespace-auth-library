<?php
session_start();
include_once '../modules/Book/Book.php';

if (isset($_POST['submit'])) {
	$search = $_POST['search'];

	if (!isset($_POST['search'])) {
		// Could not get the data that should have been sent.
		die('Please complete the search form');
	}

	if (empty($_POST['search'])) {
		// One or more values are empty.
		die('Please complete the search form');
	}

	header('Location: ../templates/catalogue.php?search=' . $search);
}
