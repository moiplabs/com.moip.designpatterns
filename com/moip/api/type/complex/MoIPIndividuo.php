<?php
final class MoIPIndividuo {
	/**
	 * @var	string
	 */
	private $apelido;

	/**
	 * @var	string
	 */
	private $email;

	/**
	 * @var	MoIPEndereco
	 */
	private $enderecoCobranca;

	/**
	 * @var	MoIPEndereco
	 */
	private $enderecoEntrega;

	/**
	 * @var	MoIPIdentidade
	 */
	private $identidade;

	/**
	 * @var	string
	 */
	private $loginMoIP;

	/**
	 * @var	string
	 */
	private $nome;

	/**
	 * @var	string
	 */
	private $telefoneCelular;

	/**
	 * Recupera o valor de $apelido
	 * @return	string
	 */
	public function getApelido() {
		return $this->apelido;
	}

	/**
	 * Recupera o valor de $email
	 * @return	string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Recupera o valor de $enderecoCobranca
	 * @return	MoIPEndereco
	 */
	public function getEnderecoCobranca() {
		return $this->enderecoCobranca;
	}

	/**
	 * Recupera o valor de $enderecoEntrega
	 * @return	MoIPEndereco
	 */
	public function getEnderecoEntrega() {
		return $this->enderecoEntrega;
	}

	/**
	 * Recupera o valor de $identidade
	 * @return	MoIPIdentidade
	 */
	public function getIdentidade() {
		return $this->identidade;
	}

	/**
	 * Recupera o valor de $loginMoIP
	 * @return	string
	 */
	public function getLoginMoIP() {
		return $this->loginMoIP;
	}

	/**
	 * Recupera o valor de $nome
	 * @return	string
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * Recupera o valor de $telefoneCelular
	 * @return	string
	 */
	public function getTelefoneCelular() {
		return $this->telefoneCelular;
	}

	/**
	 * @param	string $apelido
	 */
	public function setApelido( $apelido ) {
		$this->apelido = $apelido;
	}

	/**
	 * @param	string $email
	 */
	public function setEmail( $email ) {
		if ( filter_var( $email , FILTER_VALIDATE_EMAIL ) ) {
			$this->email = $email;
		} else {
			throw new InvalidArgumentException( 'Email inválido' );
		}
	}

	/**
	 * @param	MoIPEndereco $enderecoCobranca
	 */
	public function setEnderecoCobranca( MoIPEndereco $enderecoCobranca ) {
		$this->enderecoCobranca = $enderecoCobranca;
	}

	/**
	 * @param	MoIPEndereco $enderecoEntrega
	 */
	public function setEnderecoEntrega( MoIPEndereco $enderecoEntrega ) {
		$this->enderecoEntrega = $enderecoEntrega;
	}

	/**
	 * @param	MoIPIdentidade $identidade
	 */
	public function setIdentidade( MoIPIdentidade $identidade ) {
		$this->identidade = $identidade;
	}

	/**
	 * @param	string $loginMoIP
	 */
	public function setLoginMoIP( $loginMoIP ) {
		$this->loginMoIP = $loginMoIP;
	}

	/**
	 * @param	string $nome
	 */
	public function setNome( $nome ) {
		$this->nome = $nome;
	}

	/**
	 * @param	string $telefoneCelular
	 */
	public function setTelefoneCelular( $telefoneCelular ) {
		$this->telefoneCelular = $telefoneCelular;
	}
}