<?php
namespace App\Controller\Kernel;

use App\Controller\Kernel\Config;

/**
 *	Handle all the http request
 */
Class Http {

	/**
	 *	proccess the request value
	 */
	public function __construct() {
		$conf = new Config;
		$conf->get( 'route' );
		// logprnt( $_GET );
	}
}