<?php
namespace App\Core;

/**
 *	Session
 */
Class Session {
	
	/**
	 *	start the app session
	 *	@return void
	 */
	public function start() {
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
			return session_id();
		}
		return false;
	}

}