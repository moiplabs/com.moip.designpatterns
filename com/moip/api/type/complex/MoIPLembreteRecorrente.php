<?php
final class MoIPLembreteRecorrente {
	/**
	 * @var	string
	 */
	private $data;

	/**
	 * @var	string
	 */
	private $identificador;

	/**
	 * @var	string
	 */
	private $mensagem;

	/**
	 * @var	MoIPPeriodicidade
	 */
	private $periodicidade;

	/**
	 * @var	MoIPStatusLembrete
	 */
	private $status;

	/**
	 * @var	MoIPTipoLembrete
	 */
	private $tipo;

	/**
	 * Recupera o valor de $data
	 * @return	string
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Recupera o valor de $identificador
	 * @return	string
	 */
	public function getIdentificador() {
		return $this->identificador;
	}

	/**
	 * Recupera o valor de $mensagem
	 * @return	string
	 */
	public function getMensagem() {
		return $this->mensagem;
	}

	/**
	 * Recupera o valor de $periodicidade
	 * @return	MoIPPeriodicidade
	 */
	public function getPeriodicidade() {
		return $this->periodicidade;
	}

	/**
	 * Recupera o valor de $status
	 * @return	MoIPStatusLembrete
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoLembrete
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param	string $data
	 */
	public function setData( $data ) {
		$this->data = $data;
	}

	/**
	 * @param	string $identificador
	 */
	public function setIdentificador( $identificador ) {
		$this->identificador = $identificador;
	}

	/**
	 * @param	string $mensagem
	 */
	public function setMensagem( $mensagem ) {
		$this->mensagem = $mensagem;
	}

	/**
	 * @param	MoIPPeriodicidade $periodicidade
	 */
	public function setPeriodicidade( MoIPPeriodicidade $periodicidade ) {
		$this->periodicidade = $periodicidade;
	}

	/**
	 * @param	MoIPStatusLembrete $status
	 */
	public function setStatus( MoIPStatusLembrete $status ) {
		$this->status = $status;
	}

	/**
	 * @param	MoIPTipoLembrete $tipo
	 */
	public function setTipo( MoIPTipoLembrete $tipo ) {
		$this->tipo = $tipo;
	}
}