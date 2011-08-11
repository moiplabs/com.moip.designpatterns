<?php
final class MoIPCalculoFrete {
	/**
	 * @var	MoIPTipoFrete
	 */
	private $tipo;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorFixo;

	/**
	 * @var	float
	 */
	private $valorPercentual;

	/**
	 * @var	MoIPFreteCorreios
	 */
	private $correios;

	/**
	 * @var	MoIPDias
	 */
	private $prazo;

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoFrete
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * Recupera o valor de $valorFixo
	 * @return	MoIPValorMonetario
	 */
	public function getValorFixo() {
		return $this->valorFixo;
	}

	/**
	 * Recupera o valor de $valorPercentual
	 * @return	float
	 */
	public function getValorPercentual() {
		return $this->valorPercentual;
	}

	/**
	 * Recupera o valor de $correios
	 * @return	MoIPFreteCorreios
	 */
	public function getCorreios() {
		return $this->correios;
	}

	/**
	 * Recupera o valor de $prazo
	 * @return	MoIPDias
	 */
	public function getPrazo() {
		return $this->prazo;
	}

	/**
	 * @param	MoIPTipoFrete $tipo
	 */
	public function setTipo( MoIPTipoFrete $tipo ) {
		$this->tipo = $tipo;
	}

	/**
	 * @param	MoIPValorMonetario $valorFixo
	 */
	public function setValorFixo( MoIPValorMonetario $valorFixo ) {
		$this->valorFixo = $valorFixo;
	}

	/**
	 * @param float $valorPercentual
	 */
	public function setValorPercentual( $valorPercentual ) {
		$this->valorPercentual = (float) $valorPercentual;
	}

	/**
	 * @param	MoIPFreteCorreios $correios
	 */
	public function setCorreios( MoIPFreteCorreios $correios ) {
		$this->correios = $correios;
	}

	/**
	 * @param	MoIPDias $prazo
	 */
	public function setPrazo( MoIPDias $prazo ) {
		$this->prazo = $prazo;
	}
}