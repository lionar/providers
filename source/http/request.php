<?php

namespace http\providers;

class request extends \ioc\provider
{
	public function register ( )
	{
		$request = \http\request::capture ( );

		$this->container->instance ( 'request', $request );

		\request::instance ( $request );
	}
}