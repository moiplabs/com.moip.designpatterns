<?php
final class MoIPLembreteUnico {
	/**
	 * @var	string
	 */
	private $data;

	/**
	 * @var	string
	 */
	private $mensagem;

	/**
	 * @var	string
	 */
	private $identificador;

	/**
	 * @var	MoIPTipoLembrete
	 */
	private $tipo;

	/**
	 * @var	MoIPStatusLembrete
	 */
	private $status;

	/**
	 * Recupera o valor de $data
	 * @return	string
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Recupera o valor de $mensagem
	 * @return	string
	 */
	public function getMensagem() {
		return $this->mensagem;
	}

	/**
	 * Recupera o valor de $identificador
	 * @return	string
	 */
	public function getIdentificador() {
		return $this->identificador;
	}

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoLembrete
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * Recupera o valor de $status
	 * @return	MoIPStatusLembrete
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param	string $data
	 */
	public function setData( $data ) {
		$this->data = $data;
	}

	/**
	 * @param	string $mensagem
	 */
	public function setMensagem( $mensagem ) {
		$this->mensagem = $mensagem;
	}

	/**
	 * @param	string $identificador
	 */
	public function setIdentificador( $identificador ) {
		$this->identificador = $identificador;
	}

	/**
	 * @param	MoIPTipoLembrete $tipo
	 */
	public function setTipo( MoIPTipoLembrete $tipo ) {
		$this->tipo = $tipo;
	}

	/**
	 * @param	MoIPStatusLembrete $status
	 */
	public function setStatus( MoIPStatusLembrete $status ) {
		$this->status = $status;
	}
}