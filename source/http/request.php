<?php

namespace http\providers;

class request extends \ioc\provider
{
	public function register ( )
	{
		$this->container->share ( 'request', function ( )
		{
			return request::capture ( );
		} );
	}
}