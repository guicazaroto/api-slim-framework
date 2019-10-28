<?php
use function src\slimConfiguration;
use App\Controllers\StoreController;
use App\Controllers\ProductController;

$app = new \Slim\App(slimConfiguration());

$app->get('/store' , StoreController :: class . ':getStores');
$app->post('/store', StoreController :: class . ':insertStore');
$app->put('/store', StoreController :: class . ':updateStore');
$app->delete('/store', StoreController :: class . ':deleteStore');

$app->run();