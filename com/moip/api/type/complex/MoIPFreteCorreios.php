<?php
final class MoIPFreteCorreios {
	/**
	 * @var	MoIPOpcaoDisponivel
	 */
	private $avisoRecebimento;

	/**
	 * @var	string
	 */
	private $cepOrigem;

	/**
	 * @var	MoIPFormaEntregaCorreios
	 */
	private $formaEntrega;

	/**
	 * @var	MoIPOpcaoDisponivel
	 */
	private $maoPropria;

	/**
	 * @var	float
	 */
	private $pesoTotal;

	/**
	 * @var	MoIPOpcaoDisponivel
	 */
	private $valorDeclarado;

	/**
	 * Recupera o valor de $avisoRecebimento
	 * @return	MoIPOpcaoDisponivel
	 */
	public function getAvisoRecebimento() {
		return $this->avisoRecebimento;
	}

	/**
	 * Recupera o valor de $cepOrigem
	 * @return	string
	 */
	public function getCepOrigem() {
		return $this->cepOrigem;
	}

	/**
	 * Recupera o valor de $formaEntrega
	 * @return	MoIPFormaEntregaCorreios
	 */
	public function getFormaEntrega() {
		return $this->formaEntrega;
	}

	/**
	 * Recupera o valor de $maoPropria
	 * @return	MoIPOpcaoDisponivel
	 */
	public function getMaoPropria() {
		return $this->maoPropria;
	}

	/**
	 * Recupera o valor de $pesoTotal
	 * @return	float
	 */
	public function getPesoTotal() {
		return $this->pesoTotal;
	}

	/**
	 * Recupera o valor de $valorDeclarado
	 * @return	MoIPOpcaoDisponivel
	 */
	public function getValorDeclarado() {
		return $this->valorDeclarado;
	}

	/**
	 * @param	MoIPOpcaoDisponivel $avisoRecebimento
	 */
	public function setAvisoRecebimento( MoIPOpcaoDisponivel $avisoRecebimento ) {
		$this->avisoRecebimento = $avisoRecebimento;
	}

	/**
	 * @param	string $cepOrigem
	 */
	public function setCepOrigem( $cepOrigem ) {
		$this->cepOrigem = $cepOrigem;
	}

	/**
	 * @param	MoIPFormaEntregaCorreios $formaEntrega
	 */
	public function setFormaEntrega( MoIPFormaEntregaCorreios $formaEntrega ) {
		$this->formaEntrega = $formaEntrega;
	}

	/**
	 * @param	MoIPOpcaoDisponivel $maoPropria
	 */
	public function setMaoPropria( MoIPOpcaoDisponivel $maoPropria ) {
		$this->maoPropria = $maoPropria;
	}

	/**
	 * @param	float $pesoTotal
	 */
	public function setPesoTotal( $pesoTotal ) {
		$this->pesoTotal = $pesoTotal;
	}

	/**
	 * @param	MoIPOpcaoDisponivel $valorDeclarado
	 */
	public function setValorDeclarado( MoIPOpcaoDisponivel $valorDeclarado ) {
		$this->valorDeclarado = $valorDeclarado;
	}
}