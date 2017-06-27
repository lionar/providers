<?php

namespace providers;

class input extends \ioc\provider
{
	public function register ( )
	{
		$this->app->instance ( 'input', new \input\collection );
	}
}