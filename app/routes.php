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
 * Handle trailing slashes
 */
$slash = new TrailingSlash(false);
$slash->redirect(301);
$app->add($slash);

/**
 * Fallback
 */
$app->any('/{path:.+}', function() {
	require __DIR__ . '/../public/wp/index.php';
	exit;
});
