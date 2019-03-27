<?php
/*
|--------------------------------------------------------------------------
| Bootstrap
|--------------------------------------------------------------------------
|	this will bootstrap the whole application
*/

# global variables
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

# global helpers
require ROOT . DS . 'app' . DS . 'lib' . DS . 'functions.php';

# autoloader
spl_autoload_register( function( $cls ) {
	# reformat the class string for general autoloading
	$cls = ROOT . DS . str_replace('\\', DS, strtolower($cls)) . '.php';
	if( file_exists($cls) ) {
		return require_once $cls;
	}
} );

# composer autoload
$composerAutoload = ROOT . DS . 'vendor' . DS . 'autoload.php';
if( file_exists($composerAutoload) ) {
	require_once $composerAutoload;
}

# run error handler
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

# run the main controller
\App\Core\Kernel::app();