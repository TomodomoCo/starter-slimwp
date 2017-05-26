<?php

namespace App\Controllers;

class IndexController extends BaseController
{

	public function get($request, $response, $args)
	{
		$context = [
			'title' => get_bloginfo('name'),
		];

		return $this->view->render($response, 'index.html.twig', $context);
	}

}
