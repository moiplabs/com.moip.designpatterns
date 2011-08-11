<?php
final class MoIPComissao {
	/**
	 * @var	MoIPIndividuo
	 */
	private $comissionado;

	/**
	 * @var	string
	 */
	private $razao;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valor;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorJaCreditado;

	/**
	 * Recupera o valor de $comissionado
	 * @return	MoIPIndividuo
	 */
	public function getComissionado() {
		return $this->comissionado;
	}

	/**
	 * Recupera o valor de $razao
	 * @return	string
	 */
	public function getRazao() {
		return $this->razao;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	MoIPValorMonetario
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * Recupera o valor de $valorJaCreditado
	 * @return	MoIPValorMonetario
	 */
	public function getValorJaCreditado() {
		return $this->valorJaCreditado;
	}

	/**
	 * @param	MoIPIndividuo $comissionado
	 */
	public function setComissionado( MoIPIndividuo $comissionado ) {
		$this->comissionado = $comissionado;
	}

	/**
	 * @param	string $razao
	 */
	public function setRazao( $razao ) {
		$this->razao = $razao;
	}

	/**
	 * @param	MoIPValorMonetario $valor
	 */
	public function setValor( MoIPValorMonetario $valor ) {
		$this->valor = $valor;
	}

	/**
	 * @param	MoIPValorMonetario $valorJaCreditado
	 */
	public function setValorJaCreditado( MoIPValorMonetario $valorJaCreditado ) {
		$this->valorJaCreditado = $valorJaCreditado;
	}
}