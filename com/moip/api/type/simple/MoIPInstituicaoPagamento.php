<?php
final class MoIPInstituicaoPagamento {
	const AMERICAN_EXPRESS = 'AmericanExpress';
	const AURA = 'Aura';
	const BANCO_DO_BRASIL = 'BancoDoBrasil';
	const BANCO_REAL = 'BancoReal';
	const BANRISUL = 'Banrisul';
	const BRADESCO = 'Bradesco';
	const DINERS = 'Diners';
	const HIPERCARD = 'Hipercard';
	const ITAU = 'Itau';
	const MASTERCARD = 'MasterCard';
	const MOIP = 'MoIP';
	const PAGGO = 'Paggo';
	const UNIBANCO = 'Unibanco';
	const VISA = 'Visa';

	/**
	 * @var	string
	 */
	private $instituicaoPagamento;

	/**
	 * @var	array
	 */
	private $instituicoesPagamento = array(
		MoIPInstituicaoPagamento::AMERICAN_EXPRESS	, MoIPInstituicaoPagamento::AURA,
		MoIPInstituicaoPagamento::BANCO_DO_BRASIL	, MoIPInstituicaoPagamento::BANCO_REAL,
		MoIPInstituicaoPagamento::BANRISUL			, MoIPInstituicaoPagamento::BRADESCO,
		MoIPInstituicaoPagamento::DINERS			, MoIPInstituicaoPagamento::HIPERCARD,
		MoIPInstituicaoPagamento::ITAU				, MoIPInstituicaoPagamento::MASTERCARD,
		MoIPInstituicaoPagamento::MOIP				, MoIPInstituicaoPagamento::PAGGO,
		MoIPInstituicaoPagamento::UNIBANCO			, MoIPInstituicaoPagamento::VISA
	);

	/**
	 * @param	string $instituicaoPagamento
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $instituicaoPagamento ) {
		if ( in_array( $instituicaoPagamento , $this->instituicoesPagamento ) ) {
			$this->instituicaoPagamento = $instituicaoPagamento;
		} else {
			throw new InvalidArgumentException( 'Instituição de pagamento inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->instituicaoPagamento;
	}
}