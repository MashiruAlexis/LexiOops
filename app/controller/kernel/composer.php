<?php
Namespace App\Controller\Kernel;

/**
 *	Handle all the composer side
 */
Class Composer {

	# composer file
	const COMPOSER_JSON = 'composer.json';

	/**
	 *	check if the library is present
	 */
	public function startUpCheck() {
		# compser.json file path
		$composer = BP . DS . self::COMPOSER_JSON;

		# check if the composer file is present
		if(! file_exists($composer) ) {
			return false;
		}
		return true;
	}
}