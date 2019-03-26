<?php
Namespace App\Controller\Kernel;

use App\Controller\Kernel\Composer;
use App\Controller\Kernel\Http;
use App\Controller\Kernel\Routes;

Class Boot {
	protected $routes;

	public function __construct( Routes $routes ) {
		$this->routes = $routes;
	}
	/**
	 *	start the app
	 */
	public function run() {
		# also check if the files needed to boot are here
		$composer = new Composer;
		if(! $composer->startUpCheck() ) {
			throw new \Exception("Error: Missing files.", 1);
		}

		# run the http handler
		$http = new Http;

	}
}