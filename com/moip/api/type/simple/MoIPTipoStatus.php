<?php
final class MoIPTipoStatus {
	const FALHA = 'Falha';
	const SUCESSO = 'Sucesso';

	/**
	 * @var	string
	 */
	private $tipoStatus;

	/**
	 * @var	array
	 */
	private $tiposStatus = array(
		MoIPTipoStatus::FALHA , MoIPTipoStatus::SUCESSO
	);

	/**
	 * @param	string $tipoStatus
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoStatus ) {
		if ( in_array( $tipoStatus , $this->tiposStatus ) ) {
			$this->tipoStatus = $tipoStatus;
		} else {
			throw new InvalidArgumentException( 'Tipo de status inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoStatus;
	}
}