<?php
final class MoIPCodigoPais {
	/**
	 * @var	string
	 */
	private $codigoPais;

	/**
	 * @var	array
	 */
	private $paises = array( 'BRL' );

	/**
	 * @param	string $codigoPais
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $codigoPais = 'BRL' ) {
		if ( in_array( $codigoPais , $this->paises ) ) {
			$this->codigoPais = $codigoPais;
		} else {
			throw new InvalidArgumentException( 'Código do país inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->codigoPais;
	}
}