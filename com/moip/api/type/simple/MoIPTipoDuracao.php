<?php
final class MoIPTipoDuracao {
	const ANOS = 'Anos';
	const DIAS = 'Dias';
	const HORAS = 'Horas';
	const MESES = 'Meses';
	const MINUTOS = 'Minutos';
	const SEMANAS = 'Semanas';

	/**
	 * @var	string
	 */
	private $tipoDuracao;

	/**
	 * @var	array
	 */
	private $tiposDuracao = array(
		MoIPTipoDuracao::ANOS	, MoIPTipoDuracao::DIAS,
		MoIPTipoDuracao::HORAS	, MoIPTipoDuracao::MESES,
		MoIPTipoDuracao::MINUTOS, MoIPTipoDuracao::SEMANAS
	);

	/**
	 * @param	string $tipoDias
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoDias ) {
		if ( in_array( $tipoDias , $this->tiposDias ) ) {
			$this->tipoDias = $tipoDias;
		} else {
			throw new InvalidArgumentException( 'Tipo de dias inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoDias;
	}
}