<?php

// connect to our MySQL database and execute a query
class Database
{
	public $connection;

	public function __construct($config, $username = 'root', $password = null)
	{
		$this->connection = new mysqli(
			$config['hostname'],
			$username,
			$password,
			$config['database'],
			$config['port'],
			$config['socket']
		);

		if ($this->connection->connect_errno) {
			echo "Failed to connect to MySQL: " . $this->connection->connect_error;
		}
	}

	public function query($query, $params = [])
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($params);
		$result = $statement->get_result();
		if ($result->num_rows === 1) {
			return $result->fetch_assoc();
		} elseif ($result->num_rows > 0) {
			return $result->fetch_all(MYSQLI_ASSOC);
		} else {
			return false;
		}
	}

	public function insert($query, $params = [])
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($params);
	}

	public function lastInsertId()
	{
		return $this->connection->insert_id;
	}
}
