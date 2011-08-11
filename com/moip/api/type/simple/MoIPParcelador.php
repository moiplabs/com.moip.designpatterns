<?php
final class MoIPParcelador {
	const ADMINISTRADORA = 'Administradora';
	const MOIP = 'MoIP';
	const NENHUM = 'Nenhum';
	const RECEBEDOR = 'Recebedor';

	/**
	 * @var	string
	 */
	private $parcelador;

	/**
	 * @var	array
	 */
	private $parceladores = array(
		MoIPParcelador::ADMINISTRADORA	, MoIPParcelador::MOIP,
		MoIPParcelador::NENHUM			, MoIPParcelador::RECEBEDOR
	);

	/**
	 * @param	string $parcelador
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $parcelador ) {
		if ( in_array( $parcelador , $this->parceladores ) ) {
			$this->parcelador = $parcelador;
		} else {
			throw new InvalidArgumentException( 'Parcelador inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->parcelador;
	}
}