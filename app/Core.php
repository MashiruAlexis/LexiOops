<?php
Namespace App;

# Gobals
define('DS', DIRECTORY_SEPARATOR);
define('BP', dirname(dirname(__FILE__)));

# init autoloader
spl_autoload_register('App\Core::autoloadMain');

# vendor autoloader
require BP . DS . 'vendor' . DS . 'autoload.php';
# we need to set the error handler
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

# global functions
require BP . DS . 'app' . DS . 'Functions.php';

use App\Controller\Router;
use App\Controller\Kernel\Boot;

/**
 *	Core
 */
Class Core {

	/**
	 *	constructor
	 */
	public function __construct() {
		# create new boot instance
		$boot = new Boot;
		$boot->run();
	}

	/**
	 *	AUTLOADER
	 */
	public static function autoloadMain( $cls ) {
		$cls = BP . DS . strtolower(str_replace("\\", DS, $cls)) . '.php';
		if( file_exists($cls) ) {
			include_once $cls;
		}
	}

	/**
	 *	start the app
	 */
	public static function app() {
		return new Core;
	}
}