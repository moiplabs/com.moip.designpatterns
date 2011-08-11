<?php
final class MoIPTipoLembrete {
	const EMAIL = 'Email';
	const SMS = 'SMS';

	/**
	 * @var	string
	 */
	private $tipoLembrete;

	/**
	 * @var	array
	 */
	private $tiposLembrete = array(
		MoIPTipoLembrete::EMAIL , MoIPTipoLembrete::SMS
	);

	/**
	 * @param	string $tipoLembrete
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoLembrete ) {
		if ( in_array( $tipoLembrete , $this->tiposLembrete ) ) {
			$this->tipoLembrete = $tipoLembrete;
		} else {
			throw new InvalidArgumentException( 'Tipo de lembrete inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoLembrete;
	}
}