<?php
final class MoIPAutorizacao {
	/**
	 * @var	MoIPIndividuo
	 */
	private $pagador;

	/**
	 * @var	MoIPEndereco
	 */
	private $enderecoCobranca;

	/**
	 * @var	MoIPEndereco
	 */
	private $enderecoEntrega;

	/**
	 * @var	MoIPIndividuo
	 */
	private $recebedor;

	/**
	 * @var	MoIPPagamento
	 */
	private $pagamento;

	/**
	 * Recupera o valor de $pagador
	 * @return	MoIPIndividuo
	 */
	public function getPagador() {
		return $this->pagador;
	}

	/**
	 * Recupera o valor de $enderecoCobranca
	 * @return	MoIPEndereco
	 */
	public function getEnderecoCobranca() {
		return $this->enderecoCobranca;
	}

	/**
	 * Recupera o valor de $enderecoEntrega
	 * @return	MoIPEndereco
	 */
	public function getEnderecoEntrega() {
		return $this->enderecoEntrega;
	}

	/**
	 * Recupera o valor de $recebedor
	 * @return	MoIPIndividuo
	 */
	public function getRecebedor() {
		return $this->recebedor;
	}

	/**
	 * Recupera o valor de $pagamento
	 * @return	MoIPPagamento
	 */
	public function getPagamento() {
		return $this->pagamento;
	}

	/**
	 * @param MoIPIndividuo $pagador
	 */
	public function setPagador( MoIPIndividuo $pagador ) {
		$this->pagador = $pagador;
	}

	/**
	 * @param MoIPEndereco $enderecoCobranca
	 */
	public function setEnderecoCobranca( MoIPEndereco $enderecoCobranca ) {
		$this->enderecoCobranca = $enderecoCobranca;
	}

	/**
	 * @param MoIPEndereco $enderecoEntrega
	 */
	public function setEnderecoEntrega( MoIPEndereco $enderecoEntrega ) {
		$this->enderecoEntrega = $enderecoEntrega;
	}

	/**
	 * @param MoIPIndividuo $recebedor
	 */
	public function setRecebedor( MoIPIndividuo $recebedor ) {
		$this->recebedor = $recebedor;
	}

	/**
	 * @param MoIPPagamento $pagamento
	 */
	public function setPagamento( MoIPPagamento $pagamento ) {
		$this->pagamento = $pagamento;
	}
}