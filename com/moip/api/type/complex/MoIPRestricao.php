<?php
final class MoIPRestricao {
	/**
	 * @var	MoIPFormaRestricao
	 */
	private $forma;

	/**
	 * @var	string
	 */
	private $mensagem;

	/**
	 * @var	MoIPPeriodo
	 */
	private $periodo;

	/**
	 * @var	MoIPTipoRestricao
	 */
	private $tipo;

	/**
	 * @var	float
	 */
	private $valor;

	/**
	 * Recupera o valor de $forma
	 * @return	MoIPFormaRestricao
	 */
	public function getForma() {
		return $this->forma;
	}

	/**
	 * Recupera o valor de $mensagem
	 * @return	string
	 */
	public function getMensagem() {
		return $this->mensagem;
	}

	/**
	 * Recupera o valor de $periodo
	 * @return	MoIPPeriodo
	 */
	public function getPeriodo() {
		return $this->periodo;
	}

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoRestricao
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	float
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * @param	MoIPFormaRestricao $forma
	 */
	public function setForma( MoIPFormaRestricao $forma ) {
		$this->forma = $forma;
	}

	/**
	 * @param	string $mensagem
	 */
	public function setMensagem( $mensagem ) {
		$this->mensagem = $mensagem;
	}

	/**
	 * @param	MoIPPeriodo $periodo
	 */
	public function setPeriodo( MoIPPeriodo $periodo ) {
		$this->periodo = $periodo;
	}

	/**
	 * @param	MoIPTipoRestricao $tipo
	 */
	public function setTipo( MoIPTipoRestricao $tipo ) {
		$this->tipo = $tipo;
	}

	/**
	 * @param	float $valor
	 */
	public function setValor( $valor ) {
		$this->valor = $valor;
	}
}