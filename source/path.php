<?php

namespace providers;

class path extends \ioc\provider
{
	public function register ( )
	{
		$this->container->instance ( 'path', new \path\collection ( __DIR__ . '/../..' ) );
	}
}