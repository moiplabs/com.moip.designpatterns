<?php
final class MoIPParcelamento {
	/**
	 * @var	float
	 */
	private $juros;

	/**
	 * @var	integer
	 */
	private $maximoParcelas;

	/**
	 * @var	integer
	 */
	private $minimoParcelas;

	/**
	 * @var	MoIPTipoRecebimento
	 */
	private $recebimento;

	/**
	 * Recupera o valor de $juros
	 * @return	float
	 */
	public function getJuros() {
		return $this->juros;
	}

	/**
	 * Recupera o valor de $maximoParcelas
	 * @return	integer
	 */
	public function getMaximoParcelas() {
		return $this->maximoParcelas;
	}

	/**
	 * Recupera o valor de $minimoParcelas
	 * @return	integer
	 */
	public function getMinimoParcelas() {
		return $this->minimoParcelas;
	}

	/**
	 * Recupera o valor de $recebimento
	 * @return	MoIPTipoRecebimento
	 */
	public function getRecebimento() {
		return $this->recebimento;
	}

	/**
	 * @param	float $juros
	 */
	public function setJuros( $juros ) {
		$this->juros = $juros;
	}

	/**
	 * @param	integer $maximoParcelas
	 */
	public function setMaximoParcelas( $maximoParcelas ) {
		$this->maximoParcelas = (int) $maximoParcelas;
	}

	/**
	 * @param	integer $minimoParcelas
	 */
	public function setMinimoParcelas( $minimoParcelas ) {
		$this->minimoParcelas = (int) $minimoParcelas;
	}

	/**
	 * @param	MoIPTipoRecebimento $recebimento
	 */
	public function setRecebimento( MoIPTipoRecebimento $recebimento ) {
		$this->recebimento = $recebimento;
	}
}