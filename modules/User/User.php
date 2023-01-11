<?php
class User
{
	private $mysqli;
	private $username;
	private $password;

	public function __construct($username, $password)
	{
		session_start();
		// Connect to the database
		$this->mysqli = new mysqli('localhost', 'root', '', 'library');
		$this->username = $this->validate($username);
		$this->password = $this->validate($password);
	}

	public function __destruct()
	{
		$this->mysqli->close();
		session_destroy();
	}

	public function login($username, $password)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM users WHERE username = ?');
		// Bind the parameters
		$stmt->bind_param('s', $username);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check if the user exists
		if ($result->num_rows == 1) {
			// User exists
			// Get the user data
			$user = $result->fetch_assoc();
			// Check if the password is correct
			if (password_verify($this->password, $user['password'])) {
				// Password is correct
				// Set the session variables
				$_SESSION['username'] = $user['username'];
				$_SESSION['user_id'] = $user['user_id'];
				$_SESSION['role'] = $user['role'];
				$_SESSION['logged_in'] = true;
				// Login successful
				return true;
			} else {
				// Password is incorrect
				return false;
			}
		} else {
			// User does not exist
			return false;
		}
	}

	public function logout()
	{
		// Unset all session variables
		$_SESSION = array();
		// Destroy the session
		session_destroy();
	}

	public function register($username, $password)
	{
		// Hash the password
		$password = password_hash($this->password, PASSWORD_DEFAULT);
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
		// Bind the parameters
		$stmt->bind_param('ss', $username, $password);
		// Execute the statement
		$stmt->execute();
		// Check if the user was created
		if ($stmt->affected_rows == 1) {
			// Registration successful
			return true;
		} else {
			// Registration failed
			return false;
		}
	}

	public function getUserByUsername($username)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM users WHERE username = ?');
		// Bind the parameters
		$stmt->bind_param('s', $username);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check if the user exists
		if ($result->num_rows == 1) {
			// User exists
			// Get the user data
			$user = $result->fetch_assoc();
			// Return the user data
			return $user;
		} else {
			// User does not exist
			return false;
		}
	}

	public function userExists($username)
	{
		// Prepare the SQL statement
		$stmt = $this->mysqli->prepare('SELECT * FROM users WHERE username = ?');
		// Bind the parameters
		$stmt->bind_param('s', $username);
		// Execute the statement
		$stmt->execute();
		// Get the result
		$result = $stmt->get_result();
		// Check if the user exists
		if ($result->num_rows > 0) {
			// User exists
			return true;
		} else {
			// User does not exist
			return false;
		}
	}

	public function validate($data)
	{
		// Trim the data
		$data = trim($data);
		// Strip the slashes
		$data = stripslashes($data);
		// Convert special characters to HTML entities
		$data = htmlspecialchars($data);
		// Return the data
		return $data;
	}

	public function redirect($extra)
	{
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri/$extra");
		exit;
	}
}
