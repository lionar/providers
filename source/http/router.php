<?php

namespace http\providers;

class router extends \ioc\provider
{
	public function register ( )
	{
		$router = new \http\router;

		$this->container->instance ( 'router', $router );

		\route::instance ( $router );
	}
}