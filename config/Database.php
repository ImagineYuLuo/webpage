<?php

class Database
{
    private static $server = "localhost";
    private static $username = "sa";
    private static $password = "1111";
    private static $database = "my_db";
    private $connection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $dsn = "sqlsrv:Server=" . self::$server . ";Database=" . self::$database;
        try {
            $this->connection = new PDO($dsn, self::$username, self::$password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("Connection Failed: " . $ex->getMessage());
        }
    }

    public function executeQuery($query, $params = [])
    {
        try {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("查詢失敗: " . $e->getMessage());
        }
    }

    public function selectQuery($query, $params = [])
    {
        $stmt = $this->executeQuery($query, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertQuery()
    {

    }

    public function updateQuery()
    {

    }

    public function deleteQuery()
    {

    }

}