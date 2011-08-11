<?php
final class MoIPInstrucaoUnica {
	/**
	 * @var	MoIPBoleto
	 */
	private $boleto;

	/**
	 * @var	MoIPComissoes
	 */
	private $comissoes;

	/**
	 * @var	string
	 */
	private $dataCriacao;

	/**
	 * @var	string
	 */
	private $dataVencimento;

	/**
	 * @var	MoIPEntrega
	 */
	private $entrega;

	/**
	 * @var	MoIPFormasPagamento
	 */
	private $formasPagamento;

	/**
	 * @var	string
	 */
	private $idProprio;

	/**
	 * @var	MoIPLembretes
	 */
	private $lembretes;

	/**
	 * @var	MoIPMensagens
	 */
	private $mensagens;

	/**
	 * @var	MoIPMoeda
	 */
	private $moeda;

	/**
	 * @var	MoIPIndividuo
	 */
	private $pagador;

	/**
	 * @var	MoIPParcelamentos
	 */
	private $parcelamentos;

	/**
	 * @var	string
	 */
	private $razao;

	/**
	 * @var	MoIPIndividuo
	 */
	private $recebedor;

	/**
	 * @var	MoIPRestricoes
	 */
	private $restricoes;

	/**
	 * @var	string
	 */
	private $token;

	/**
	 * @var	string
	 */
	private $urlNotificacao;

	/**
	 * @var	string
	 */
	private $urlRetorno;

	/**
	 * @var	MoIPValores
	 */
	private $valores;

	/**
	 * Recupera o valor de $boleto
	 * @return	MoIPBoleto
	 */
	public function getBoleto() {
		return $this->boleto;
	}

	/**
	 * Recupera o valor de $comissoes
	 * @return	MoIPComissoes
	 */
	public function getComissoes() {
		return $this->comissoes;
	}

	/**
	 * Recupera o valor de $dataCriacao
	 * @return	string
	 */
	public function getDataCriacao() {
		return $this->dataCriacao;
	}

	/**
	 * Recupera o valor de $dataVencimento
	 * @return	string
	 */
	public function getDataVencimento() {
		return $this->dataVencimento;
	}

	/**
	 * Recupera o valor de $entrega
	 * @return	MoIPEntrega
	 */
	public function getEntrega() {
		return $this->entrega;
	}

	/**
	 * Recupera o valor de $formasPagamento
	 * @return	MoIPFormasPagamento
	 */
	public function getFormasPagamento() {
		return $this->formasPagamento;
	}

	/**
	 * Recupera o valor de $idProprio
	 * @return	string
	 */
	public function getIdProprio() {
		return $this->idProprio;
	}

	/**
	 * Recupera o valor de $lembretes
	 * @return	MoIPLembretes
	 */
	public function getLembretes() {
		return $this->lembretes;
	}

	/**
	 * Recupera o valor de $mensagens
	 * @return	MoIPMensagens
	 */
	public function getMensagens() {
		return $this->mensagens;
	}

	/**
	 * Recupera o valor de $moeda
	 * @return	MoIPMoeda
	 */
	public function getMoeda() {
		return $this->moeda;
	}

	/**
	 * Recupera o valor de $pagador
	 * @return	MoIPIndividuo
	 */
	public function getPagador() {
		return $this->pagador;
	}

	/**
	 * Recupera o valor de $parcelamentos
	 * @return	MoIPParcelamentos
	 */
	public function getParcelamentos() {
		return $this->parcelamentos;
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
	 * Recupera o valor de $restricoes
	 * @return	MoIPRestricoes
	 */
	public function getRestricoes() {
		return $this->restricoes;
	}

	/**
	 * Recupera o valor de $token
	 * @return	string
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Recupera o valor de $urlNotificacao
	 * @return	string
	 */
	public function getUrlNotificacao() {
		return $this->urlNotificacao;
	}

	/**
	 * Recupera o valor de $urlRetorno
	 * @return	string
	 */
	public function getUrlRetorno() {
		return $this->urlRetorno;
	}

	/**
	 * Recupera o valor de $valores
	 * @return	MoIPValores
	 */
	public function getValores() {
		return $this->valores;
	}

	/**
	 * @param	MoIPBoleto $boleto
	 */
	public function setBoleto( MoIPBoleto $boleto ) {
		$this->boleto = $boleto;
	}

	/**
	 * @param	MoIPComissoes $comissoes
	 */
	public function setComissoes( MoIPComissoes $comissoes ) {
		$this->comissoes = $comissoes;
	}

	/**
	 * @param	string $dataCriacao
	 */
	public function setDataCriacao( $dataCriacao ) {
		$this->dataCriacao = $dataCriacao;
	}

	/**
	 * @param	string $dataVencimento
	 */
	public function setDataVencimento( $dataVencimento ) {
		$this->dataVencimento = $dataVencimento;
	}

	/**
	 * @param	MoIPEntrega $entrega
	 */
	public function setEntrega( MoIPEntrega $entrega ) {
		$this->entrega = $entrega;
	}

	/**
	 * @param	MoIPFormasPagamento $formasPagamento
	 */
	public function setFormasPagamento( MoIPFormasPagamento $formasPagamento ) {
		$this->formasPagamento = $formasPagamento;
	}

	/**
	 * @param	string $idProprio
	 */
	public function setIdProprio( $idProprio ) {
		$this->idProprio = $idProprio;
	}

	/**
	 * @param	MoIPLembretes $lembretes
	 */
	public function setLembretes( MoIPLembretes $lembretes ) {
		$this->lembretes = $lembretes;
	}

	/**
	 * @param	MoIPMensagens $mensagens
	 */
	public function setMensagens( MoIPMensagens $mensagens ) {
		$this->mensagens = $mensagens;
	}

	/**
	 * @param	MoIPMoeda $moeda
	 */
	public function setMoeda( MoIPMoeda $moeda ) {
		$this->moeda = $moeda;
	}

	/**
	 * @param	MoIPIndividuo $pagador
	 */
	public function setPagador( MoIPIndividuo $pagador ) {
		$this->pagador = $pagador;
	}

	/**
	 * @param	MoIPParcelamentos $parcelamentos
	 */
	public function setParcelamentos( MoIPParcelamentos $parcelamentos ) {
		$this->parcelamentos = $parcelamentos;
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
	 * @param	MoIPRestricoes $restricoes
	 */
	public function setRestricoes( MoIPRestricoes $restricoes ) {
		$this->restricoes = $restricoes;
	}

	/**
	 * @param	string $token
	 */
	public function setToken( $token ) {
		$this->token = $token;
	}

	/**
	 * @param	string $urlNotificacao
	 * @throws	InvalidArgumentException::
	 */
	public function setUrlNotificacao( $urlNotificacao ) {
		if ( filter_var( $urlNotificacao , FILTER_VALIDATE_URL ) ) {
			$this->urlNotificacao = $urlNotificacao;
		} else {
			throw new InvalidArgumentException( 'URL de notificação inválida' );
		}
	}

	/**
	 * @param	string $urlRetorno
	 * @throws	InvalidArgumentException::
	 */
	public function setUrlRetorno( $urlRetorno ) {
		if ( filter_var( $urlRetorno , FILTER_VALIDATE_URL ) ) {
			$this->urlRetorno = $urlRetorno;
		} else {
			throw new InvalidArgumentException( 'URL de retorno inválida' );
		}
	}

	/**
	 * @param	MoIPValores $valores
	 */
	public function setValores( MoIPValores $valores ) {
		$this->valores = $valores;
	}
}