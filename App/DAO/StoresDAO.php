<?php
namespace App\DAO;

class StoresDAO extends Conn {
    public function __construct()
    {
        parent:: __construct();
    }

    public function getAllStores () {
        $stores = $this
            ->pdo->query('SELECT 
                id, 
                store_name, 
                phone, 
                address 
            FROM stores')
            ->fetchAll(\PDO::FETCH_ASSOC);
        
            return $stores;
    }
}