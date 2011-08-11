<?php
final class MoIPTipoDias {
	const CORRIDOS = 'Corridos';
	const UTEIS = 'Uteis';

	/**
	 * @var	string
	 */
	private $tipoDias;

	/**
	 * @var	array
	 */
	private $tiposDias = array(
		MoIPTipoDias::CORRIDOS , MoIPTipoDias::UTEIS
	);

	/**
	 * @param	string $tipoDias
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoDias ) {
		if ( in_array( $tipoDias , $this->tiposDias ) ) {
			$this->tipoDias = $tipoDias;
		} else {
			throw new InvalidArgumentException( 'Tipo de dias inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoDias;
	}
}