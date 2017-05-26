<?php

return [
	'settings' => [
		'displayErrorDetails' => true, // set to false in production
		'addContentLengthHeader' => false,
		'determineRouteBeforeAppMiddleware' => true,

		// Monolog settings
		'logger' => [
			'name' => 'slim-app',
			'path' => __DIR__ . '/../logs/app.log',
		],

		// Twig settings
		'view' => [
			'template_path' => __DIR__ . '/views',
			'twig' => [
				'cache' => false,
				'debug' => true,
				'autoescape' => false,
			],
		],
	],
];
