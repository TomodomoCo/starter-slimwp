<?php

namespace App\Controllers;

use WP_Query;

class TestController extends BaseController
{

	public function get($request, $response, $args)
	{
		$query = new WP_Query([
			'post_type'      => 'page',
			'posts_per_page' => -1,
		]);

		$context = [
			'pages' => $query->have_posts() ? $query->posts : [],
		];

		return $this->view->render($response, 'test.html.twig', $context);
	}

}
