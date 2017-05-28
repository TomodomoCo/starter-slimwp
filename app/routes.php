<?php

use Psr7Middlewares\Middleware\TrailingSlash;

/**
 * Main routes
 */
$app->group('', function() use ($app) {

	$app->get('/', '\App\Controllers\IndexController:get')
		->setName('index');

	$app->get('/test', '\App\Controllers\TestController:get')
		->setName('test');

})->add('App\Middleware\WpMiddleware:load');

/**
 * Support trailing slash
 */
$app->add(new TrailingSlash(false));

/**
 * Fallback
 */
$app->any('{path:.+}', function() {
	require __DIR__ . '/../public/wp/index.php';
	exit;
});
