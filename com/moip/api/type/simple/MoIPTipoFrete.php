<?php
final class MoIPTipoFrete {
	const CORREIOS = 'Correios';
	const PROPRIO = 'Proprio';

	/**
	 * @var	string
	 */
	private $tipoFrete;

	/**
	 * @var	array
	 */
	private $tiposFrete = array(
		MoIPTipoFrete::CORREIOS , MoIPTipoFrete::PROPRIO
	);

	/**
	 * @param	string $tipoFrete
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoFrete ) {
		if ( in_array( $tipoFrete , $this->tiposFrete ) ) {
			$this->tipoFrete = $tipoFrete;
		} else {
			throw new InvalidArgumentException( 'Tipo de frete inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoFrete;
	}
}