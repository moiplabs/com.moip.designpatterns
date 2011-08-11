<?php
final class MoIPComissionamento {
	/**
	 * @var	MoIPIndividuo
	 */
	private $comissionado;

	/**
	 * @var	boolean
	 */
	private $mostrarParaPagador;

	/**
	 * @var	boolean
	 */
	private $parcelada;

	/**
	 * @var	string
	 */
	private $razao;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorFixo;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorPercentual;

	/**
	 * Recupera o valor de $comissionado
	 * @return	MoIPIndividuo
	 */
	public function getComissionado() {
		return $this->comissionado;
	}

	/**
	 * Recupera o valor de $mostrarParaPagador
	 * @return	boolean
	 */
	public function getMostrarParaPagador() {
		return $this->mostrarParaPagador;
	}

	/**
	 * Recupera o valor de $parcelada
	 * @return	boolean
	 */
	public function getParcelada() {
		return $this->parcelada;
	}

	/**
	 * Recupera o valor de $razao
	 * @return	string
	 */
	public function getRazao() {
		return $this->razao;
	}

	/**
	 * Recupera o valor de $valorFixo
	 * @return	MoIPValorMonetario
	 */
	public function getValorFixo() {
		return $this->valorFixo;
	}

	/**
	 * Recupera o valor de $valorPercentual
	 * @return	MoIPValorMonetario
	 */
	public function getValorPercentual() {
		return $this->valorPercentual;
	}

	/**
	 * @param	MoIPIndividuo $comissionado
	 */
	public function setComissionado( MoIPIndividuo $comissionado ) {
		$this->comissionado = $comissionado;
	}

	/**
	 * @param	boolean $mostrarParaPagador
	 */
	public function setMostrarParaPagador( $mostrarParaPagador ) {
		$this->mostrarParaPagador = $mostrarParaPagador;
	}

	/**
	 * @param	boolean $parcelada
	 */
	public function setParcelada( $parcelada ) {
		$this->parcelada = $parcelada;
	}

	/**
	 * @param	string $razao
	 */
	public function setRazao( $razao ) {
		$this->razao = $razao;
	}

	/**
	 * @param	MoIPValorMonetario $valorFixo
	 */
	public function setValorFixo( MoIPValorMonetario $valorFixo ) {
		$this->valorFixo = $valorFixo;
	}

	/**
	 * @param	MoIPValorMonetario $valorPercentual
	 */
	public function setValorPercentual( MoIPValorMonetario $valorPercentual ) {
		$this->valorPercentual = $valorPercentual;
	}
}