<?php
namespace App\Controllers;

use App\DAO\StoresDAO;
use App\Models\StoreModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class StoreController
{
    public function getStores(Request $request, Response $response, array $args): Response
    {
        $stores = new StoresDAO();
        $stores = $stores->getAllStores();
        $response = $response->withJson($stores);
        
        return $response;
    }

    public function insertStore (Request $request, Response $response, array $args) : Response {
        
        $data = $request->getParsedBody();

        $storeDAO = new StoresDAO();
        $store = new StoreModel();
        $store->setName($data['name'])
            ->setPhone($data['phone'])
            ->setAddress($data['address']);
        $storeDAO->insertStore($store);

        $response = $response->withJson([
            "message" => "insert successfully"
        ]);
        return $response;  
    }

    public function updateStore (Request $request, Response $response, array $args) : Response {

        $data = $request->getParsedBody();

        $storeDAO = new StoresDAO();
        $store = new StoreModel();
        $store
            ->setId($data['id'])
            ->setName($data['name'])
            ->setPhone($data['phone'])
            ->setAddress($data['address']);
        $storeDAO->updateStore($store);

        $response = $response->withJson([
            "message" => "Update successfully"
        ]);
            
        return $response;
    }

    public function deleteStore (Request $request, Response $response, array $args) : Response {
        $response = $response->withJson([
            'message' => 'Hello World'
        ]);
        return $response;
    }
}