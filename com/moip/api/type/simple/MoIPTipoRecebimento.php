<?php
final class MoIPTipoRecebimento {
	const A_VISTA = 'AVista';
	const PARCELADO = 'Parcelado';

	/**
	 * @var	string
	 */
	private $tipoRecebimento;

	/**
	 * @var	array
	 */
	private $tiposRecebimento = array(
		MoIPTipoRecebimento::A_VISTA , MoIPTipoRecebimento::PARCELADO
	);

	/**
	 * @param	string $tipoRecebimento
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoRecebimento ) {
		if ( in_array( $tipoRecebimento , $this->tiposRecebimento ) ) {
			$this->tipoRecebimento = $tipoRecebimento;
		} else {
			throw new InvalidArgumentException( 'Recebimento inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoRecebimento;
	}
}