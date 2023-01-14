<?php
class Book
{
	private $mysqli;

	public function __construct()
	{
		// Connect to the database
		$this->mysqli = new mysqli('localhost', 'root', '', 'library');
	}

	public function __destruct()
	{
		$this->mysqli->close();
	}

	public function getAllBooks()
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM books_authors');
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check for results
		if ($result->num_rows > 0) {
			$books = $result->fetch_all(MYSQLI_ASSOC);
			return $books;
		} else {
			return [];
		}
	}

	public function getBookByPartialName($partial_name)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM books_authors WHERE book_name LIKE ?');
		$partial_name = '%' . $partial_name . '%';
		$stmt->bind_param('s', $partial_name);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check for results
		if ($result->num_rows > 0) {
			$books = $result->fetch_all(MYSQLI_ASSOC);
			return $books;
		} else {
			return [];
		}
	}

	public function getBookAuthor()
	{
	}

	public function getBooksByAuthor($author_id)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM books WHERE author_id = ?');
		$stmt->bind_param('i', $author_id);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check for results
		if ($result->num_rows > 0) {
			$books = $result->fetch_all(MYSQLI_ASSOC);
			return $books;
		} else {
			return [];
		}
	}

	public function searchBook($search_query)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM books_authors WHERE book_name LIKE ?');
		$search_query = '%' . $search_query . '%';
		$stmt->bind_param('s', $search_query);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check for results
		if ($result->num_rows > 0) {
			$books = $result->fetch_all(MYSQLI_ASSOC);
			return $books;
		} else {
			return [];
		}
	}

	public function searchBookAuthor($search_query)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM books_authors WHERE book_name LIKE ? OR author_name LIKE ?');
		$search_query = '%' . $search_query . '%';
		$stmt->bind_param('ss', $search_query, $search_query);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check for results
		if ($result->num_rows > 0) {
			$books = $result->fetch_all(MYSQLI_ASSOC);
			return $books;
		} else {
			return [];
		}
	}

	// CRUD functions
	public function create($book_name, $year, $genre, $age_group)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('INSERT INTO books (book_name, year, genre, age_group) VALUES (?, ?, ?, ?)');
		$stmt->bind_param('????', $book_name, $year, $genre, $age_group);
		// Execute the statement
		$stmt->execute();
		// Check if the user was created
		if ($stmt->affected_rows == 1) {
			// Created book successful
			return true;
		} else {
			// Failed
			return false;
		}
	}

	public function read($book_id)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM books WHERE book_id = ?');
		$stmt->bind_param('i', $book_id);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check for results
		if ($result->num_rows > 0) {
			$book = $result->fetch_assoc();
			return $book;
		} else {
			return [];
		}
	}

	public function update($book_id, $book_name, $year, $genre, $age_group)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('UPDATE books SET book_name = ?, year = ?, genre = ?, age_group = ? WHERE book_id = ?');
		$stmt->bind_param('ssssi', $book_name, $year, $genre, $age_group, $book_id);
		// Execute the statement
		$stmt->execute();
		// Check if the user was created
		if ($stmt->affected_rows == 1) {
			// Created book successful
			return true;
		} else {
			// Failed
			return false;
		}
	}

	public function delete($book_id)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('DELETE FROM books WHERE book_id = ?');
		$stmt->bind_param('i', $book_id);
		// Execute the statement
		$stmt->execute();
		// Check if the user was created
		if ($stmt->affected_rows == 1) {
			// Created book successful
			return true;
		} else {
			// Failed
			return false;
		}
	}
}
