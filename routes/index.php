<?php
use function src\slimConfiguration;
use App\Controllers\StoreController;
use Tuupola\Middleware\HttpBasicAuthentication;

$app = new \Slim\App(slimConfiguration());
$app->add(new HttpBasicAuthentication([
  "secure" => false,
  "users" => [
      "root" => "t00r",
      "somebody" => "passw0rd"
  ]
]));

$app->get('/store' , StoreController :: class . ':getAllStores');
$app->post('/store', StoreController :: class . ':createStore');
$app->put('/store', StoreController :: class . ':updateStore');
$app->delete('/store', StoreController :: class . ':deleteStore');

$app->run();