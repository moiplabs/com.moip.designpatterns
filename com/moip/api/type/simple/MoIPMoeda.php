<?php
final class MoIPMoeda {
	/**
	 * @var	string
	 */
	private $moeda;

	/**
	 * @var	array
	 */
	private $moedas = array( 'BRL' );

	/**
	 * @param	string $moeda
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $moeda = 'BRL' ) {
		if ( in_array( $moeda , $this->moedas ) ) {
			$this->moeda = $moeda;
		} else {
			throw new InvalidArgumentException( 'Moeda inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->moeda;
	}
}