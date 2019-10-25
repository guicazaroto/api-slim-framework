<?php
namespace App\DAO;

class StoresDAO extends Conn {
    public function __construct()
    {
        parent:: __construct();
    }
    public function teste () {
        $lojas = $this->pdo->query("SELECT * FROM stores")
            ->fetchAll(\PDO :: FETCH_ASSOC);

        echo "<pre>";
        foreach ($lojas as $loja) {
            var_dump($loja);
        }
        die;
    }
}