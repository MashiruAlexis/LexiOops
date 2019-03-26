<?php
Namespace App\Controller\Kernel;

use App\Controller\Kernel\Composer;
use App\Controller\Kernel\Http;
use App\Controller\Kernel\Routes;
use App\Controller\Kernel\Config;

Class Boot {
	protected $config;
	protected $routes;
	protected $http;

	public function __construct(Config $config) {
		$this->config = $config;
		$this->routes = new Routes;
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

		# now read the routes
		logprnt( $this->routes );

	}
}