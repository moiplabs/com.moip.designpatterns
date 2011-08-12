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

	/**
	 * @param	MoIPComponent $component
	 * @param	string $path
	 * @return	HTTPResponse
	 */
	protected function request( MoIPComponent $component , $path = '/sandbox/ws/alpha/EnviarInstrucao/Unica' ) {
		$xml = '<?xml version="1.0"?>' . PHP_EOL;
		$xml.= $component->draw();

		$httpConnection = $this->createHttpConnection();
		$httpConnection->initialize( 'desenvolvedor.moip.com.br' , true );
		$httpConnection->setRequestBody( $xml );

		return $httpConnection->execute( $path , HTTPRequestMethod::POST );
	}
}