<?php

namespace providers;

class config extends \ioc\provider
{
	public function register ( )
	{
		$config = new \config\hashTable;

		$this->container->instance ( 'config', $config );

		\config::instance ( $config );
	}
}