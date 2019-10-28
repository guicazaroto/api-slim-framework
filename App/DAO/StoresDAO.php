<?php
namespace App\DAO;

use App\Models\StoreModel;

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

    public function insertStore (StoreModel $store) : void {
        $stmt = $this
            ->pdo
            ->prepare('INSERT INTO stores VALUE (
                    null,
                    :name,
                    :phone,
                    :address
                )'
            );
            $stmt->execute([
                'name' => $store->getName(),
                'phone' => $store->getPhone(),
                'address' => $store->getAddress()
            ]);
    }

    public function updateStore (StoreModel $store)  {
        $stmt = $this
            ->pdo
            ->prepare('UPDATE stores 
                SET store_name = :name, 
                phone = :phone, 
                address = :address
            WHERE id = :id');
        
        $stmt->execute([
            'id' => $store->getId(),
            'name' => $store->getName(),
            'phone' => $store->getPhone(),
            'address' => $store->getAddress()
        ]);
    }

    public function deleteStore (int $id) {
        
    }
}