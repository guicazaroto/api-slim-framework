<?php
use function src\slimConfiguration;
use App\Controllers\StoreController;
use App\Controllers\ProductController;

$app = new \Slim\App(slimConfiguration());

$app->get('/store' , StoreController :: class . ':getAllStores');
$app->post('/store', StoreController :: class . ':createStore');
$app->put('/store', StoreController :: class . ':updateStore');
$app->delete('/store', StoreController :: class . ':deleteStore');

$app->run();