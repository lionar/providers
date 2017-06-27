<?php

namespace http\providers;

class request extends \ioc\provider
{
	public function register ( )
	{
		$request = \http\request::capture ( );

		$this->container->instance ( 'request', $request );

		\request::instance ( $request );

		$this->fill ( );
	}

	private function fill ( )
	{
		if ( ! $this->container->bound ( 'input' ) )
			return;
		$input = $this->container->make ( 'input' );

		foreach ( $this->container->make ( 'request' )->all ( ) as $key => $value )
			$input->{$key} = $value; 
	}
}