<?php

namespace providers;

class status extends \ioc\provider
{
	public function register ( )
	{
		$status = new \statuses\statuses;
		
		$this->container->instance ( 'status', $status );

		\status::instance ( $status );
	}
}