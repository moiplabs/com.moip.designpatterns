<?php
final class MoIPParcela {
	/**
	 * @var	string
	 */
	private $dataCredito;

	/**
	 * @var	integer
	 */
	private $numero;

	/**
	 * @var	MoIPStatusPagamento
	 */
	private $status;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valor;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorLiquido;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorTaxa;

	/**
	 * Recupera o valor de $dataCredito
	 * @return	string
	 */
	public function getDataCredito() {
		return $this->dataCredito;
	}

	/**
	 * Recupera o valor de $numero
	 * @return	integer
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * Recupera o valor de $status
	 * @return	MoIPStatusPagamento
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	MoIPValorMonetario
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * Recupera o valor de $valorLiquido
	 * @return	MoIPValorMonetario
	 */
	public function getValorLiquido() {
		return $this->valorLiquido;
	}

	/**
	 * Recupera o valor de $valorTaxa
	 * @return	MoIPValorMonetario
	 */
	public function getValorTaxa() {
		return $this->valorTaxa;
	}

	/**
	 * @param	string $dataCredito
	 */
	public function setDataCredito( $dataCredito ) {
		$this->dataCredito = $dataCredito;
	}

	/**
	 * @param	integer $numero
	 */
	public function setNumero( $numero ) {
		$this->numero = $numero;
	}

	/**
	 * @param	MoIPStatusPagamento $status
	 */
	public function setStatus( MoIPStatusPagamento $status ) {
		$this->status = $status;
	}

	/**
	 * @param	MoIPValorMonetario $valor
	 */
	public function setValor( MoIPValorMonetario $valor ) {
		$this->valor = $valor;
	}

	/**
	 * @param	MoIPValorMonetario $valorLiquido
	 */
	public function setValorLiquido( MoIPValorMonetario $valorLiquido ) {
		$this->valorLiquido = $valorLiquido;
	}

	/**
	 * @param	MoIPValorMonetario $valorTaxa
	 */
	public function setValorTaxa( MoIPValorMonetario $valorTaxa ) {
		$this->valorTaxa = $valorTaxa;
	}
}