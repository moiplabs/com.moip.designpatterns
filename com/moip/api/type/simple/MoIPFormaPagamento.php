<?php
final class MoIPFormaPagamento {
	const BOLETO_BANCARIO = 'BoletoBancario';
	const CARTAO_CREDITO = 'CartaoCredito';
	const CARTAO_DEBITO = 'CartaoDebito';
	const CARTEIRA_MOIP = 'CarteiraMoIP';
	const DEBITO_BANCARIO = 'DebitoBancario';
	const FINANCIAMENTO_BANCARIO = 'FinanciamentoBancario';

	/**
	 * @var	string
	 */
	private $formaPagamento;

	/**
	 * @var	array
	 */
	private $formasPagamento = array(
		MoIPFormaPagamento::BOLETO_BANCARIO	, MoIPFormaPagamento::CARTAO_CREDITO,
		MoIPFormaPagamento::CARTAO_DEBITO	, MoIPFormaPagamento::CARTEIRA_MOIP,
		MoIPFormaPagamento::DEBITO_BANCARIO	, MoIPFormaPagamento::FINANCIAMENTO_BANCARIO
	);

	/**
	 * @param	string $formaPagamento
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $formaPagamento ) {
		if ( in_array( $formaPagamento , $this->formasPagamento ) ) {
			$this->formaPagamento = $formaPagamento;
		} else {
			throw new InvalidArgumentException( 'Forma de pagamento inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->formaPagamento;
	}
}