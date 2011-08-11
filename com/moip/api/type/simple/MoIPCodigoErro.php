<?php
final class MoIPCodigoErro {
	/**
	 * @var	integer
	 */
	private $codigoErro;

	/**
	 * @param	integer $codigoErro
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $codigoErro ) {
		if ( is_int( $codigoErro ) && $codigoErro >= 0 && $codigoErro <= 999 ) {
			$this->codigoErro = $codigoErro;
		} else {
			throw new InvalidArgumentException( 'Código de erro deve ser um inteiro entre 0 e 999' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return (string) $this->codigoErro;
	}
}