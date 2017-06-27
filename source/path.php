<?php

namespace providers;

class path extends \ioc\provider
{
	public function register ( )
	{
		$path = new \path\collection ( __DIR__ . '/../../../..' );
		
		$this->container->instance ( 'path', $path );

		\path::instance ( $path );
	}
}