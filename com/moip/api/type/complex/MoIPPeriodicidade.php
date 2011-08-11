<?php
final class MoIPPeriodicidade {
	/**
	 * @var	MoIPTipoPeriodicidade
	 */
	private $tipo;

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoPeriodicidade
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param	MoIPTipoPeriodicidade $tipo
	 */
	public function setTipo( MoIPTipoPeriodicidade $tipo ) {
		$this->tipo = $tipo;
	}
}