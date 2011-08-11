<?php
final class MoIPPeriodicidade {
	const ANUAL = 'Anual';
	const DIARIA = 'Diaria';
	const MENSAL = 'Mensal';
	const SEMANAL = 'Semanal';

	/**
	 * @var	string
	 */
	private $periodicidade;

	/**
	 * @var	array
	 */
	private $periodicidades = array(
		MoIPPeriodicidade::ANUAL	, MoIPPeriodicidade::DIARIA,
		MoIPPeriodicidade::MENSAL	, MoIPPeriodicidade::SEMANAL
	);

	/**
	 * @param	string $periodicidade
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $periodicidade ) {
		if ( in_array( $periodicidade , $this->periodicidades ) ) {
			$this->periodicidade = $periodicidade;
		} else {
			throw new InvalidArgumentException( 'Periodicidade inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->periodicidade;
	}
}