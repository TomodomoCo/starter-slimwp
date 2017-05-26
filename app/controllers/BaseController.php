<?php

namespace App\Controllers;

class BaseController
{

	public function __construct( $container )
	{
		$this->container = $container;

		$this->view = $this->container['view'];
	}

}
