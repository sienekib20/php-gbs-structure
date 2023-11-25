<?php

namespace Gbs\Kibo;

use Gbs\Kibo\Router\Anotation\Route;


class Application
{
	protected Route $route;

	public function __construct()
	{
		
	}

	public function init()
	{
		var_dump('Inicializing');exit;
	}
}