<?php
final class MoIPDias {
	/**
	 * @var	MoIPTipoDias
	 */
	private $tipo;

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoDias
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param MoIPTipoDias $tipo
	 */
	public function setTipo( MoIPTipoDias $tipo ) {
		$this->tipo = $tipo;
	}
}