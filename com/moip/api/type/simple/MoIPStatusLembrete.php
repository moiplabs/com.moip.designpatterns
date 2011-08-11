<?php
final class MoIPStatusLembrete {
	const AGUARDANDO = 'Aguardando';
	const EM_ANDAMENTO = 'EmAndamento';
	const ENVIADO = 'Enviado';
	const FALHA = 'Falha';
	const REALIZADO = 'Realizado';

	/**
	 * @var	string
	 */
	private $statusLembrete;

	/**
	 * @var	array
	 */
	private $statusesLembrete = array(
		MoIPStatusLembrete::AGUARDANDO	, MoIPStatusLembrete::EM_ANDAMENTO,
		MoIPStatusLembrete::ENVIADO		, MoIPStatusLembrete::FALHA,
		MoIPStatusLembrete::REALIZADO
	);

	/**
	 * @param	string $statusLembrete
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $statusLembrete ) {
		if ( in_array( $statusLembrete , $this->statusesLembrete ) ) {
			$this->statusLembrete = $statusLembrete;
		} else {
			throw new InvalidArgumentException( 'Status do lembrete inválido' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->statusLembrete;
	}
}