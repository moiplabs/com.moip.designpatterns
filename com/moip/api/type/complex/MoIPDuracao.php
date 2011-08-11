<?php
final class MoIPDuracao {
	/**
	 * @var	MoIPTipoDuracao
	 */
	private $tipo;

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoDuracao
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param	MoIPTipoDuracao $tipo
	 */
	public function setTipo( MoIPTipoDuracao $tipo ) {
		$this->tipo = $tipo;
	}
}