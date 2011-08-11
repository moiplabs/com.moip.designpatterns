<?php
final class MoIPCodigoEstado {
	/**
	 * @var	string
	 */
	private $codigoEstado;

	/**
	 * @var	array
	 */
	private $uf = array(
		'AC' , 'AL' , 'AP' , 'AM',
		'BA' , 'CE' , 'DF' , 'ES',
		'GO' , 'MA' , 'MT' , 'MS',
		'MG' , 'PA' , 'PB' , 'PR',
		'PE' , 'PI' , 'RJ' , 'RN',
		'RS' , 'RO' , 'RR' , 'SC',
		'SP' , 'SE' , 'TO'
	);

	/**
	 * @param	string $codigoEstado
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $codigoEstado ) {
		if ( in_array( $codigoEstado , $this->uf ) ) {
			$this->codigoEstado = $codigoEstado;
		} else {
			throw new InvalidArgumentException( 'O código do estado é inválido.' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->codigoEstado;
	}
}