<?php

namespace ECommerceFuel\Middleware;

class AuthMiddleware
{

	public function load($request, $response, $next)
	{
		require __DIR__ . '/../../public/wp/wp-blog-header.php';

		$response = $next($request, $response);

		return $response;
	}

}
