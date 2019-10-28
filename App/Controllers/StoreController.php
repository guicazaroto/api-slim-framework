<?php
namespace App\Controllers;

use App\DAO\StoresDAO;
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

    public function insertStores (Request $request, Response $response, array $args) : Response {
        $response = $response->withJson([
            'message' => 'Hello World'
        ]);
        return $response;
    }

    public function updateStores (Request $request, Response $response, array $args) : Response {
        $response = $response->withJson([
            'message' => 'Hello World'
        ]);
        return $response;
    }

    public function deleteStores (Request $request, Response $response, array $args) : Response {
        $response = $response->withJson([
            'message' => 'Hello World'
        ]);
        return $response;
    }
}