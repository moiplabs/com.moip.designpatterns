<?php
final class MoIPPagamento {
	/**
	 * @var	MoIPValorMonetario
	 */
	private $acrescimos;

	/**
	 * @var	MoIPComissao
	 */
	private $comissao;

	/**
	 * @var	string
	 */
	private $data;

	/**
	 * @var	string
	 */
	private $dataCredito;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $deducoes;

	/**
	 * @var	MoIPFormaPagamento
	 */
	private $formaPagamento;

	/**
	 * @var	MoIPInstituicaoPagamento
	 */
	private $instituicaoPagamento;

	/**
	 * @var	MoIPParcela
	 */
	private $parcela;

	/**
	 * @var	MoIPStatusPagamento
	 */
	private $status;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $taxaMoIP;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $taxaParaPagador;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $totalPago;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valor;

	/**
	 * @var	MoIPValorMonetario
	 */
	private $valorLiquido;

	/**
	 * Recupera o valor de $acrescimos
	 * @return	MoIPValorMonetario
	 */
	public function getAcrescimos() {
		return $this->acrescimos;
	}

	/**
	 * Recupera o valor de $comissao
	 * @return	MoIPComissao
	 */
	public function getComissao() {
		return $this->comissao;
	}

	/**
	 * Recupera o valor de $data
	 * @return	string
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Recupera o valor de $dataCredito
	 * @return	string
	 */
	public function getDataCredito() {
		return $this->dataCredito;
	}

	/**
	 * Recupera o valor de $deducoes
	 * @return	MoIPValorMonetario
	 */
	public function getDeducoes() {
		return $this->deducoes;
	}

	/**
	 * Recupera o valor de $formaPagamento
	 * @return	MoIPFormaPagamento
	 */
	public function getFormaPagamento() {
		return $this->formaPagamento;
	}

	/**
	 * Recupera o valor de $instituicaoPagamento
	 * @return	MoIPInstituicaoPagamento
	 */
	public function getInstituicaoPagamento() {
		return $this->instituicaoPagamento;
	}

	/**
	 * Recupera o valor de $parcela
	 * @return	MoIPParcela
	 */
	public function getParcela() {
		return $this->parcela;
	}

	/**
	 * Recupera o valor de $status
	 * @return	MoIPStatusPagamento
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Recupera o valor de $taxaMoIP
	 * @return	MoIPValorMonetario
	 */
	public function getTaxaMoIP() {
		return $this->taxaMoIP;
	}

	/**
	 * Recupera o valor de $taxaParaPagador
	 * @return	MoIPValorMonetario
	 */
	public function getTaxaParaPagador() {
		return $this->taxaParaPagador;
	}

	/**
	 * Recupera o valor de $totalPago
	 * @return	MoIPValorMonetario
	 */
	public function getTotalPago() {
		return $this->totalPago;
	}

	/**
	 * Recupera o valor de $valor
	 * @return	MoIPValorMonetario
	 */
	public function getValor() {
		return $this->valor;
	}

	/**
	 * Recupera o valor de $valorLiquido
	 * @return	MoIPValorMonetario
	 */
	public function getValorLiquido() {
		return $this->valorLiquido;
	}

	/**
	 * @param	MoIPValorMonetario $acrescimos
	 */
	public function setAcrescimos( MoIPValorMonetario $acrescimos ) {
		$this->acrescimos = $acrescimos;
	}

	/**
	 * @param	MoIPComissao $comissao
	 */
	public function setComissao( MoIPComissao $comissao ) {
		$this->comissao = $comissao;
	}

	/**
	 * @param	string $data
	 */
	public function setData( $data ) {
		$this->data = $data;
	}

	/**
	 * @param	string $dataCredito
	 */
	public function setDataCredito( $dataCredito ) {
		$this->dataCredito = $dataCredito;
	}

	/**
	 * @param	MoIPValorMonetario $deducoes
	 */
	public function setDeducoes( MoIPValorMonetario $deducoes ) {
		$this->deducoes = $deducoes;
	}

	/**
	 * @param	MoIPFormaPagamento $formaPagamento
	 */
	public function setFormaPagamento( MoIPFormaPagamento $formaPagamento ) {
		$this->formaPagamento = $formaPagamento;
	}

	/**
	 * @param	MoIPInstituicaoPagamento $instituicaoPagamento
	 */
	public function setInstituicaoPagamento( MoIPInstituicaoPagamento $instituicaoPagamento ) {
		$this->instituicaoPagamento = $instituicaoPagamento;
	}

	/**
	 * @param	MoIPParcela $parcela
	 */
	public function setParcela( MoIPParcela $parcela ) {
		$this->parcela = $parcela;
	}

	/**
	 * @param	MoIPStatusPagamento $status
	 */
	public function setStatus( MoIPStatusPagamento $status ) {
		$this->status = $status;
	}

	/**
	 * @param	MoIPValorMonetario $taxaMoIP
	 */
	public function setTaxaMoIP( MoIPValorMonetario $taxaMoIP ) {
		$this->taxaMoIP = $taxaMoIP;
	}

	/**
	 * @param	MoIPValorMonetario $taxaParaPagador
	 */
	public function setTaxaParaPagador( MoIPValorMonetario $taxaParaPagador ) {
		$this->taxaParaPagador = $taxaParaPagador;
	}

	/**
	 * @param	MoIPValorMonetario $totalPago
	 */
	public function setTotalPago( MoIPValorMonetario $totalPago ) {
		$this->totalPago = $totalPago;
	}

	/**
	 * @param	MoIPValorMonetario $valor
	 */
	public function setValor( MoIPValorMonetario $valor ) {
		$this->valor = $valor;
	}

	/**
	 * @param	MoIPValorMonetario $valorLiquido
	 */
	public function setValorLiquido( MoIPValorMonetario $valorLiquido ) {
		$this->valorLiquido = $valorLiquido;
	}
}