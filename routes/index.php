<?php
use function src\slimConfiguration;
use App\Controllers\ProductController;

$app = new \Slim\App(slimConfiguration());

$app->get('/', ProductController :: class . ':getProducts');

$app->get('/store' , ProductController :: class . ':getStores');
$app->post('/store', ProductController :: class . ':insertStores');
$app->put('/store', ProductController :: class . ':updateStores');
$app->delete('/store', ProductController :: class . ':deleteStores');

$app->get('/store' , ProductController :: class . ':getStores');
$app->post('/store', ProductController :: class . ':insertStores');
$app->put('/store', ProductController :: class . ':updateStores');
$app->delete('/store', ProductController :: class . ':deleteStores');

$app->run();