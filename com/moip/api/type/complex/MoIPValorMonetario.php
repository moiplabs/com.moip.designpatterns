<?php
final class MoIPValorMonetario {
	/**
	 * @var	MoIPCodigoMoeda
	 */
	private $moeda;

	/**
	 * Recupera o valor de $moeda
	 * @return	MoIPMoeda
	 */
	public function getMoeda() {
		return $this->moeda;
	}

	/**
	 * @param	MoIPCodigoMoeda $moeda
	 */
	public function setMoeda( MoIPCodigoMoeda $moeda ) {
		$this->moeda = $moeda;
	}
}