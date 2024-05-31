<?php

class Database
{
    public $connection;
    public $statement;

    public function __construct()
    {
        $host = "localhost";
        $port = 5500;
        $dbname = 'ajax_db';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host=$host;dbname=$dbname";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
         ]);
        //$dsn = "mysql:host={$config['host']};port='5500';dbname={$config['dbname']}";
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this->statement;
    }
}

