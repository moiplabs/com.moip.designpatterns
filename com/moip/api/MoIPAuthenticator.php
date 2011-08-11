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
	 * @param	string $username Nome do usuário do cPanel
	 * @param	string $password Senha do usuário do cPanel
	 */
	public function __construct( $username , $password ) {
		$this->setUsername( $username );
		$this->setPassword( $password );
	}

	/**
	 * @param	HTTPRequest $httpRequest
	 * @see		HTTPAuthenticator::authenticate()
	 */
	public function authenticate( HTTPRequest $httpRequest ) {
		$httpRequest->addRequestHeader( 'Authorization' , sprintf(
			'Basic %s' , base64_encode(
				sprintf( '%s:%s' , $this->username , $this->password )
			) )
		);
	}

	/**
	 * Recupera a senha do usuário
	 * @return	string
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Recupera o nome do usuário
	 * @return	string
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Define a senha do usuário
	 * @param	string $password A senha que será definida
	 */
	public function setPassword( $password ) {
		$this->password = $password;
	}

	/**
	 * Define o nome do usuário
	 * @param	string $username O nome que será definido
	 */
	public function setUsername( $username ) {
		$this->username = $username;
	}
}