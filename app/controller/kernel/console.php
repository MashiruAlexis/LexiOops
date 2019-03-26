<?php
namespace App\Controller\Kernel;

Class Console {

	# console arguments
	private $args;
	
	/**
	 *	run the console command
	 */
	public function run( $args = [] ) {
		# remove the first argument
		unset( $args[0] );

		foreach( $args as $arg ) {
			$this->args[] = $arg;
		}


		logprnt( $args );
	}

}