<?php
final class MoIPEndereco {
	/**
	 * @var	string
	 */
	private $bairro;

	/**
	 * @var	string
	 */
	private $cep;

	/**
	 * @var	string
	 */
	private $cidade;

	/**
	 * @var	string
	 */
	private $complemento;

	/**
	 * @var	MoIPCodigoEstado
	 */
	private $estado;

	/**
	 * @var	string
	 */
	private $logradouro;

	/**
	 * @var	integer
	 */
	private $numero;

	/**
	 * @var	MoIPCodigoPais
	 */
	private $pais;

	/**
	 * @var	string
	 */
	private $telefone;

	/**
	 * Recupera o valor de $bairro
	 * @return	string
	 */
	public function getBairro() {
		return $this->bairro;
	}

	/**
	 * Recupera o valor de $cep
	 * @return	string
	 */
	public function getCep() {
		return $this->cep;
	}

	/**
	 * Recupera o valor de $cidade
	 * @return	string
	 */
	public function getCidade() {
		return $this->cidade;
	}

	/**
	 * Recupera o valor de $complemento
	 * @return	string
	 */
	public function getComplemento() {
		return $this->complemento;
	}

	/**
	 * Recupera o valor de $estado
	 * @return	MoIPCodigoEstado
	 */
	public function getEstado() {
		return $this->estado;
	}

	/**
	 * Recupera o valor de $logradouro
	 * @return	string
	 */
	public function getLogradouro() {
		return $this->logradouro;
	}

	/**
	 * Recupera o valor de $numero
	 * @return	integer
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * Recupera o valor de $pais
	 * @return	MoIPCodigoPais
	 */
	public function getPais() {
		return $this->pais;
	}

	/**
	 * Recupera o valor de $telefone
	 * @return	string
	 */
	public function getTelefone() {
		return $this->telefone;
	}

	/**
	 * @param	string $bairro
	 */
	public function setBairro( $bairro ) {
		$this->bairro = $bairro;
	}

	/**
	 * @param	string $cep
	 */
	public function setCep( $cep ) {
		$this->cep = $cep;
	}

	/**
	 * @param	string $cidade
	 */
	public function setCidade( $cidade ) {
		$this->cidade = $cidade;
	}

	/**
	 * @param	string $complemento
	 */
	public function setComplemento( $complemento ) {
		$this->complemento = $complemento;
	}

	/**
	 * @param	MoIPCodigoEstado $estado
	 */
	public function setEstado( MoIPCodigoEstado $estado ) {
		$this->estado = $estado;
	}

	/**
	 * @param	string $logradouro
	 */
	public function setLogradouro( $logradouro ) {
		$this->logradouro = $logradouro;
	}

	/**
	 * @param	integer $numero
	 */
	public function setNumero( $numero ) {
		$this->numero = $numero;
	}

	/**
	 * @param	MoIPCodigoPais $pais
	 */
	public function setPais( MoIPCodigoPais $pais ) {
		$this->pais = $pais;
	}

	/**
	 * @param	string $telefone
	 */
	public function setTelefone( $telefone ) {
		$this->telefone = $telefone;
	}
}