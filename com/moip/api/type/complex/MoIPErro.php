<?php
final class MoIPErro {
	/**
	 * @var	MoIPCodigoErro
	 */
	private $codigo;

	/**
	 * Recupera o valor de $codigo
	 * @return	MoIPCodigoErro
	 */
	public function getCodigo() {
		return $this->codigo;
	}

	/**
	 * @param	MoIPCodigoErro $codigo
	 */
	public function setCodigo( MoIPCodigoErro $codigo ) {
		$this->codigo = $codigo;
	}
}