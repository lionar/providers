<?php

namespace html\providers;

use path;
use Twig_Loader_Filesystem as loader;
use Twig_Environment as twig;

class view extends \ioc\provider
{
	public function register ( )
	{
		$this->container->share ( 'view', function ( )
		{
			$loader = new loader ( path::to ( 'views' ) );

			$twig = new twig ( $loader, 
			[
			    'cache' => false,
			] );

			$view = new \html\view ( $twig );

			\view::instance ( $view );

			return $view;
		} );
	}
}