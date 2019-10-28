<?php
use function src\slimConfiguration;
use App\Controllers\StoreController;
use App\Controllers\ProductController;

$app = new \Slim\App(slimConfiguration());

$app->get('/store' , StoreController :: class . ':getStores');
$app->post('/store', StoreController :: class . ':insertStores');
$app->put('/store', StoreController :: class . ':updateStores');
$app->delete('/store', StoreController :: class . ':deleteStores');

$app->run();