<?php
namespace App\Core;

/**
 *	handle all the controllers
 */
Abstract Class Kernel {

	/**
	 * start up main controller
	 */
	public function app() {

		# start the session if its not started yet
		Session::start();
	}
}