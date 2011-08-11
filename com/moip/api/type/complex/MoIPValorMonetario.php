<?php
final class MoIPValorMonetario {
	/**
	 * @var	MoIPCodigoMoeda
	 */
	private $moeda;

	/**
	 * @var	float
	 */
	private $valor;

	/**
	 * Recupera o valor de $moeda
	 * @return	MoIPMoeda
	 */
	public function getMoeda() {
		return $this->moeda;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	float
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * @param	MoIPCodigoMoeda $moeda
	 */
	public function setMoeda( MoIPCodigoMoeda $moeda ) {
		$this->moeda = $moeda;
	}

	/**
	 * @param	float $valor
	 */
	public function setValor( $valor ) {
		$this->valor = (float) $valor;
	}
}