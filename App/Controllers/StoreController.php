<?php
namespace App\Controllers;

use App\DAO\StoresDAO;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class StoreController
{
    public function getStores(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            'message' => 'Hello World'
        ]);

        return $response;
    }
}