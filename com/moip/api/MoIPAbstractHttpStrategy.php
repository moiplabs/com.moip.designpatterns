<?php
require_once 'com/moip/api/MoIPAPIStrategy.php';
require_once 'com/moip/http/HTTPAuthenticator.php';
require_once 'com/moip/http/HTTPCookieManager.php';

abstract class MoIPAbstractHttpStrategy implements MoIPAPIStrategy {
	/**
	 * @var	HTTPAuthenticator
	 */
	private $httpAuthenticator;

	public function __construct( HTTPAuthenticator $httpAuthenticator ) {
		$this->httpAuthenticator = $httpAuthenticator;
	}

	/**
	 * @return	HTTPConnection
	 */
	protected function createHttpConnection() {
		$httpConnection = new HTTPConnection();
		$httpConnection->setCookieManager( new HTTPCookieManager() );
		$httpConnection->setAuthenticator( $this->httpAuthenticator );

		return $httpConnection;
	}
}