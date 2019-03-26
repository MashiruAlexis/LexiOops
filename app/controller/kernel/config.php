<?php
namespace App\Controller\Kernel;
use App\Controller\Kernel\Route as Route;

/**
 *	config file handler
 */
Class Config {

	# path to configuration files
	const PATH = BP . DS . 'app' . DS . 'config';
	# default file extension
	const CONFIG_EXT = '.php';

	/**
	 *	get config data
	 *	@param string $config
	 *	@return array
	 */
	public function get( $config ) {

		$conf = self::PATH . DS . $config . self::CONFIG_EXT;
		if( file_exists($conf) ) {
			return include_once $conf;
		}
		return false;
	}
}