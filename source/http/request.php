<?php

namespace http\providers;

class request extends \ioc\provider
{
	public function register ( )
	{
		$request = \http\request::capture ( );

		$this->container->share ( 'request', function ( ) use ( $request )
		{
			return $request;
		} );

		\request::instance ( $request );
	}
}