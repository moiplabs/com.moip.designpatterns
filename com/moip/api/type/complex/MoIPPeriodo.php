<?php
final class MoIPPeriodo {
	/**
	 * @var	MoIPDuracao
	 */
	private $duracao;

	/**
	 * @var	string
	 */
	private $fim;

	/**
	 * @var	string
	 */
	private $inicio;

	/**
	 * Recupera o valor de $duracao
	 * @return	MoIPDuracao
	 */
	public function getDuracao() {
		return $this->duracao;
	}

	/**
	 * Recupera o valor de $fim
	 * @return	string
	 */
	public function getFim() {
		return $this->fim;
	}

	/**
	 * Recupera o valor de $inicio
	 * @return	string
	 */
	public function getInicio() {
		return $this->inicio;
	}

	/**
	 * @param	MoIPDuracao $duracao
	 */
	public function setDuracao( MoIPDuracao $duracao ) {
		$this->duracao = $duracao;
	}

	/**
	 * @param	string $fim
	 */
	public function setFim( $fim ) {
		$this->fim = $fim;
	}

	/**
	 * @param	string $inicio
	 */
	public function setInicio( $inicio ) {
		$this->inicio = $inicio;
	}
}