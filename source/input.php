<?php

namespace providers;

class input extends \ioc\provider
{
	public function register ( )
	{
		$this->container->instance ( 'input', new \input\collection );
	}
}