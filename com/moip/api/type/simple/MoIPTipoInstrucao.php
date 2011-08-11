<?php
final class MoIPTipoInstrucao {
	const POS_PAGO = 'PosPago';
	const PRE_PAGO = 'PrePago';
	const RECORRENTE = 'Recorrente';
	const REMESSA = 'Remessa';
	const UNICO = 'Unico';

	/**
	 * @var	string
	 */
	private $tipoInstrucao;

	private $tiposInstrucao = array(
		MoIPTipoInstrucao::POS_PAGO		, MoIPTipoInstrucao::PRE_PAGO,
		MoIPTipoInstrucao::RECORRENTE	, MoIPTipoInstrucao::REMESSA,
		MoIPTipoInstrucao::UNICO
	);

	/**
	 * @param	string $tipoInstrucao
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoInstrucao ) {
		if ( in_array( $tipoInstrucao , $this->tiposInstrucao ) ) {
			$this->tipoInstrucao = $tipoInstrucao;
		} else {
			throw new InvalidArgumentException( 'Tipo de instrução inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoInstrucao;
	}
}