<?php
final class MoIPDebitoRealizado {
	/**
	 * @var	string
	 */
	private $data;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $saldoRestante;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valor;

	/**
	 * Recupera o valor de $data
	 * @return	string
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Recupera o valor de $saldoRestante
	 * @return	MoIPValorMonetario
	 */
	public function getSaldoRestante() {
		return $this->saldoRestante;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	MoIPValorMonetario
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * @param	string $data
	 */
	public function setData( $data ) {
		$this->data = $data;
	}

	/**
	 * @param	MoIPValorMonetario $saldoRestante
	 */
	public function setSaldoRestante( MoIPValorMonetario$saldoRestante ) {
		$this->saldoRestante = $saldoRestante;
	}

	/**
	 * @param	MoIPValorMonetario $valor
	 */
	public function setValor( MoIPValorMonetario$valor ) {
		$this->valor = $valor;
	}
}