<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once "vendor/autoload.php";

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new \Slim\Container($configuration);

$app = new \Slim\App($c);

//GET with Slim
$app->get("/produto[/{name}]", function(Request $request, Response $response, $args) : Response {
    $name = $args["name"] ?? 'inválido';
    $response->getBody()->write("Seu produto é $name");
    return $response;
});

//POST with Slim
$app->post("/produto", function(Request $request, Response $response, array $args) : Response {
    $data = $request->getParsedBody();
    $name = $data["name"];
    $response->getBody()->write("$name cadastrado com sucesso!"); 
    return $response;
});

//PUT with Slim
$app->put("/produto", function(Request $request, Response $response, array $args) : Response {
    $data = $request->getParsedBody();
    $name = $data["name"];
    $response->getBody()->write("$name atualizado com sucesso!");
    return $response; 
});

//DELETE with Slim
$app->delete("/produto", function(Request $request, Response $response, array $args) : Response {
    $data = $request->getParsedBody();
    $name = $data["name"];
    $response->getBody()->write("$name deletado com sucesso!");
    return $response; 
});


// // Middlewares
// $md1 = function (Request $request, Response $response, $next) : Response {
//     $response->getBody()->write("Executando Middleware 01....\n");
//     $next($request, $response);
//     return $response;
// };

// $app->post("/produto", function(Request $request, Response $response, array $args) : Response {
//     $data = $request->getParsedBody();
//     $name = $data["name"];
//     $response->getBody()->write("$name cadastrado com sucesso!"); 
//     return $response;
// })->add($md1);

$app->run();