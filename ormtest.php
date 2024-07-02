<?php

class ORM
{
    private $connection;

    public function __construct($host, $username, $password, $database)
    {
        $this->connection = new mysqli($host, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->connection->query($sql);
    }

    public function fetchAll($result)
    {
        $rows = [];

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    // Add more methods for CRUD operations (create, read, update, delete) as needed

    public function close()
    {
        $this->connection->close();
    }
}

// Usage example:

$orm = new ORM('localhost', 'username', 'password', 'database');

$result = $orm->query("SELECT * FROM users");
$rows = $orm->fetchAll($result);

foreach ($rows as $row) {
    echo $row['name'] . "<br>";
}

$orm->close();