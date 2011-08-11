<?php
final class MoIPRemessa {
	/**
	 * @var	string
	 */
	private $idProprio;

	/**
	 * @var	string
	 */
	private $razao;

	/**
	 * @var	MoIPIndividuo
	 */
	private $recebedor;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valor;

	/**
	 * Recupera o valor de $idProprio
	 * @return	string
	 */
	public function getIdProprio() {
		return $this->idProprio;
	}

	/**
	 * Recupera o valor de $razao
	 * @return	string
	 */
	public function getRazao() {
		return $this->razao;
	}

	/**
	 * Recupera o valor de $recebedor
	 * @return	MoIPIndividuo
	 */
	public function getRecebedor() {
		return $this->recebedor;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	MoIPValorMonetario
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * @param	string $idProprio
	 */
	public function setIdProprio( $idProprio ) {
		$this->idProprio = $idProprio;
	}

	/**
	 * @param	string $razao
	 */
	public function setRazao( $razao ) {
		$this->razao = $razao;
	}

	/**
	 * @param	MoIPIndividuo $recebedor
	 */
	public function setRecebedor( MoIPIndividuo $recebedor ) {
		$this->recebedor = $recebedor;
	}

	/**
	 * @param	MoIPValorMonetario $valor
	 */
	public function setValor( MoIPValorMonetario $valor ) {
		$this->valor = $valor;
	}
}