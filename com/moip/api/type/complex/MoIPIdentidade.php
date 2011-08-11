<?php
final class MoIPIdentidade {
	/**
	 * @var	MoIPTipoIdentidade
	 */
	private $tipo;

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoIdentidade
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param	MoIPTipoIdentidade $tipo
	 */
	public function setTipo( MoIPTipoIdentidade $tipo ) {
		$this->tipo = $tipo;
	}
}