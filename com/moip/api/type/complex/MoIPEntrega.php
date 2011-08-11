<?php
class MoIPEntrega {
	/**
	 * @var	MoIPCalculoFrete
	 */
	private $calculoFrete;

	/**
	 * @var	MoIPDestino
	 */
	private $destino;

	/**
	 * Recupera o valor de $calculoFrete
	 * @return	MoIPCalculoFrete
	 */
	public function getCalculoFrete() {
		return $this->calculoFrete;
	}

	/**
	 * Recupera o valor de $destino
	 * @return	MoIPDestino
	 */
	public function getDestino() {
		return $this->destino;
	}

	/**
	 * @param	MoIPCalculoFrete $calculoFrete
	 */
	public function setCalculoFrete( MoIPCalculoFrete $calculoFrete ) {
		$this->calculoFrete = $calculoFrete;
	}

	/**
	 * @param	MoIPDestino $destino
	 */
	public function setDestino( MoIPDestino $destino ) {
		$this->destino = $destino;
	}
}