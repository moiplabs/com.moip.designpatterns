<?php
final class MoIPInstrucaoRemessa {
	/**
	 * @var	string
	 */
	private $dataCriacao;

	/**
	 * @var	MoIPIndividuo
	 */
	private $pagador;

	/**
	 * @var	string
	 */
	private $razao;

	/**
	 * @var	MoIPRemessa
	 */
	private $remessa;

	/**
	 * @var	string
	 */
	private $token;

	/**
	 * Recupera o valor de $dataCriacao
	 * @return	string
	 */
	public function getDataCriacao() {
		return $this->dataCriacao;
	}

	/**
	 * Recupera o valor de $pagador
	 * @return	MoIPIndividuo
	 */
	public function getPagador() {
		return $this->pagador;
	}

	/**
	 * Recupera o valor de $razao
	 * @return	string
	 */
	public function getRazao() {
		return $this->razao;
	}

	/**
	 * Recupera o valor de $remessa
	 * @return	MoIPRemessa
	 */
	public function getRemessa() {
		return $this->remessa;
	}

	/**
	 * Recupera o valor de $token
	 * @return	string
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * @param	string $dataCriacao
	 */
	public function setDataCriacao( $dataCriacao ) {
		$this->dataCriacao = $dataCriacao;
	}

	/**
	 * @param	MoIPIndividuo $pagador
	 */
	public function setPagador( MoIPIndividuo $pagador ) {
		$this->pagador = $pagador;
	}

	/**
	 * @param	string $razao
	 */
	public function setRazao( $razao ) {
		$this->razao = $razao;
	}

	/**
	 * @param	MoIPRemessa $remessa
	 */
	public function setRemessa( MoIPRemessa $remessa ) {
		$this->remessa = $remessa;
	}

	/**
	 * @param	string $token
	 */
	public function setToken( $token ) {
		$this->token = $token;
	}
}