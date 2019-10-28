<?php
namespace App\DAO;

abstract class Conn {
    protected $pdo;

    public function __construct()
    {
        $host = getenv('STORE_DB_HOST');
        $port = getenv('STORE_DB_PORT');
        $dbname = getenv('STORE_DB_NAME');
        $user = getenv('STORE_DB_USER');
        $pass = getenv('STORE_DB_PASS');

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";
        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO :: ATTR_ERRMODE,
            \PDO :: ERRMODE_EXCEPTION
        );
    }
}