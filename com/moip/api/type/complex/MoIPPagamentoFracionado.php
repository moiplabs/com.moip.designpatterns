<?php
final class MoIPPagamentoFracionado {
	/**
	 * @var	float
	 */
	private $percentualMinimo;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorMinimo;

	/**
	 * Recupera o valor de $percentualMinimo
	 * @return	float
	 */
	public function getPercentualMinimo() {
		return $this->percentualMinimo;
	}

	/**
	 * Recupera o valor de $valorMinimo
	 * @return	MoIPValorMonetario
	 */
	public function getValorMinimo() {
		return $this->valorMinimo;
	}

	/**
	 * @param	float $percentualMinimo
	 */
	public function setPercentualMinimo( $percentualMinimo ) {
		$this->percentualMinimo = $percentualMinimo;
	}

	/**
	 * @param	MoIPValorMonetario $valorMinimo
	 */
	public function setValorMinimo( MoIPValorMonetario $valorMinimo ) {
		$this->valorMinimo = $valorMinimo;
	}
}