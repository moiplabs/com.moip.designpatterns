<?php
final class MoIPStatusPagamento {
	const AUTORIZADO = 'Autorizado';
	const BOLETO_IMPRESSAO = 'BoletoImpressao';
	const CANCELADO = 'Cancelado';
	const CONCLUIDO = 'Concluido';
	const EM_ANALISE = 'EmAnalise';
	const ESTORNADO = 'Estornado';
	const INICIADO = 'Iniciado';

	/**
	 * @var	string
	 */
	private $statusPagamento;

	/**
	 * @var	array
	 */
	private $statusesPagamento = array(
		MoIPStatusPagamento::AUTORIZADO	, MoIPStatusPagamento::BOLETO_IMPRESSAO,
		MoIPStatusPagamento::CANCELADO	, MoIPStatusPagamento::CONCLUIDO,
		MoIPStatusPagamento::EM_ANALISE	, MoIPStatusPagamento::ESTORNADO,
		MoIPStatusPagamento::INICIADO
	);

	/**
	 * @param	string $statusPagamento
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $statusPagamento ) {
		if ( in_array( $statusPagamento , $this->statusesPagamento ) ) {
			$this->statusPagamento = $statusPagamento;
		} else {
			throw new InvalidArgumentException( 'Status do pagamento inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->statusPagamento;
	}
}