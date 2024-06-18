<?php
class User {
    public $username;
    public $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUserData() {
        require_once '../config/Database.php';
        $database = new Database();
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $params = [
            ':username' => $this->username,
            ':password' => $this->password
        ];
        $result = $database->selectQuery($query, $params);

        if ($result != null) {
            return [
                'username' => $this->username,
                'password' => $this->password,
            ];
        } else {
            return null;
        }
    }
}