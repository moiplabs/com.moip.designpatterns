<?php
final class MoIPDias {
	/**
	 * @var	integer
	 */
	private $dias;

	/**
	 * @var	MoIPTipoDias
	 */
	private $tipo;

	/**
	 * Recupera o valor de $dias
	 * @return	integer
	 */
	public function getDias() {
		return $this->dias;
	}

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoDias
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param	integer $dias
	 */
	public function setDias( $dias ) {
		$this->dias = $dias;
	}

	/**
	 * @param MoIPTipoDias $tipo
	 */
	public function setTipo( MoIPTipoDias $tipo ) {
		$this->tipo = $tipo;
	}
}