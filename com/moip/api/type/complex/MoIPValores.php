<?php
final class MoIPValores {
	/**
	 * @var	MoIPValorMonetario
	 */
	private $acrescimo;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $deducao;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valor;

	/**
	 * Recupera o valor de $acrescimo
	 * @return	MoIPValorMonetario
	 */
	public function getAcrescimo() {
		return $this->acrescimo;
	}

	/**
	 * Recupera o valor de $deducao
	 * @return	MoIPValorMonetario
	 */
	public function getDeducao() {
		return $this->deducao;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	MoIPValorMonetario
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * @param	MoIPValorMonetario $acrescimo
	 */
	public function setAcrescimo( MoIPValorMonetario $acrescimo ) {
		$this->acrescimo = $acrescimo;
	}

	/**
	 * @param	MoIPValorMonetario $deducao
	 */
	public function setDeducao( MoIPValorMonetario $deducao ) {
		$this->deducao = $deducao;
	}

	/**
	 * @param	MoIPValorMonetario $valor
	 */
	public function setValor( MoIPValorMonetario $valor ) {
		$this->valor = $valor;
	}
}