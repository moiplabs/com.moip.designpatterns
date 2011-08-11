<?php
final class MoIPDestino {
	const A_INFORMAR = 'AInformar';
	const MESMO_COBRANCA = 'MesmoCobranca';
	const NENHUM = 'Nenhum';
	const PRE_ESTABELECIDO = 'PreEstabelecido';

	/**
	 * @var	string
	 */
	private $destino;

	/**
	 * @var	array
	 */
	private $destinos = array(
		MoIPDestino::A_INFORMAR	, MoIPDestino::MESMO_COBRANCA,
		MoIPDestino::NENHUM		, MoIPDestino::PRE_ESTABELECIDO
	);

	/**
	 * @param	string $destino
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $destino ) {
		if ( in_array( $destino , $this->destinos ) ) {
			$this->destino = $destino;
		} else {
			throw new InvalidArgumentException( 'Destino inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->destino;
	}
}