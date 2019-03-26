<?php
namespace App\Controller\Kernel;

/**
 *	Handle all the request
 */
Class Routes {
	
	protected $request;
	protected static $url = [];

	/**
	 *	register all the post request from the client
	 *	@param string $req
	 *	@return void
	 */
	public static function post( $url, $cmd ) {
		self::$url[ $url ] = $cmd;
	}

	/**
	 *	register all the post request from the client
	 *	@param string $req
	 *	@return void
	 */
	public static function get( $url, $cmd ) {
		self::$url[ $url ] = $cmd;
	}

	/**
	 *	check if the url already exist
	 *	@param $string $url
	 *	@return bool
	 */
	public static function urlExist( $url ) {
		if( isset($this->url[$url]) ) {
			return true;
		}
		return false;
	}

	public static function getUrls() {
		return $this->url;
	}

}