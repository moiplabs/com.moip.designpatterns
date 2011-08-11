<?php
final class MoIPTipoPeriodicidade {
	const ANUAL = 'Anual';
	const DIARIA = 'Diaria';
	const MENSAL = 'Mensal';
	const SEMANAL = 'Semanal';

	/**
	 * @var	string
	 */
	private $tipoPeriodicidade;

	/**
	 * @var	array
	 */
	private $tiposPeriodicidade = array(
		MoIPTipoPeriodicidade::ANUAL	, MoIPTipoPeriodicidade::DIARIA,
		MoIPTipoPeriodicidade::MENSAL	, MoIPTipoPeriodicidade::SEMANAL
	);

	/**
	 * @param	string $periodicidade
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoPeriodicidade ) {
		if ( in_array( $tipoPeriodicidade , $this->tiposPeriodicidade ) ) {
			$this->tipoPeriodicidade = $tipoPeriodicidade;
		} else {
			throw new InvalidArgumentException( 'Tipo de periodicidade inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoPeriodicidade;
	}
}