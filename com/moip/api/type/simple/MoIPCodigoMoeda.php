<?php
final class MoIPCodigoMoeda {
	/**
	 * @var	string
	 */
	private $codigoMoeda;

	/**
	 * @var	array
	 */
	private $codigosMoeda = array( 'BRL' );

	/**
	 * @param	string $codigoMoeda
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $codigoMoeda = 'BRL' ) {
		if ( in_array( $codigoMoeda , $this->codigosMoeda ) ) {
			$this->codigoMoeda = $codigoMoeda;
		} else {
			throw new InvalidArgumentException( 'Código da Moéda é inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->codigoMoeda;
	}
}