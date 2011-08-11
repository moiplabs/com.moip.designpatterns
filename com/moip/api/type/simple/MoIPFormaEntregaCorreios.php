<?php
final class MoIPFormaEntregaCorreios {
	const ENCOMENDA_NORMAL = 'EncomendaNormal';
	const SEDEX = 'Sedex';
	const SEDEX_10 = 'Sedex10';
	const SEDEX_A_COBRAR = 'SedexACobrar';
	const SEDEX_HOJE = 'SedexHoje';

	/**
	 * @var	string
	 */
	private $formaEntregaCorreios;

	/**
	 * @var	array
	 */
	private $formasEntrega = array(
		MoIPFormaEntregaCorreios::ENCOMENDA_NORMAL	, MoIPFormaEntregaCorreios::SEDEX,
		MoIPFormaEntregaCorreios::SEDEX_10			, MoIPFormaEntregaCorreios::SEDEX_A_COBRAR,
		MoIPFormaEntregaCorreios::SEDEX_HOJE
	);

	/**
	 * @param	string $formaEntregaCorreios
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $formaEntregaCorreios ) {
		if ( in_array( $formaEntregaCorreios , $this->formasEntrega ) ) {
			$this->formaEntregaCorreios = $formaEntregaCorreios;
		} else {
			throw new InvalidArgumentException( 'Forma de entrega do Correios inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->formaEntregaCorreios;
	}
}