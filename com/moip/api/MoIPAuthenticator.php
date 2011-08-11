<?php
require_once 'com/moip/http/HTTPAuthenticator.php';

class MoIPAuthenticator implements HTTPAuthenticator {
	/**
	 * @var	string
	 */
	private $password;

	/**
	 * @var	string
	 */
	private $username;

	/**
	 * Constroi o objeto de autenticação
	 * @param	string $token Token da conta MoIP
	 * @param	string $key Key da conta MoIP
	 */
	public function __construct( $token , $key ) {
		$this->setToken( $token );
		$this->setKey( $key );
	}

	/**
	 * @param	HTTPRequest $httpRequest
	 * @see		HTTPAuthenticator::authenticate()
	 */
	public function authenticate( HTTPRequest $httpRequest ) {
		$httpRequest->addRequestHeader( 'Authorization' , sprintf(
			'Basic %s' , base64_encode(
				sprintf( '%s:%s' , $this->token , $this->key )
			) )
		);
	}

	/**
	 * Recupera a Key do usuário
	 * @return	string
	 */
	public function getKey() {
		return $this->key;
	}

	/**
	 * Recupera o token do usuário
	 * @return	string
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Define a key do usuário
	 * @param	string $key A key que será definida
	 */
	public function setKey( $key ) {
		$this->key = $key;
	}

	/**
	 * Define o token do usuário
	 * @param	string $token O token que será definido
	 */
	public function setToken( $token ) {
		$this->token = $token;
	}
}
