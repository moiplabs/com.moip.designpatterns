<?php
final class MoIPOpcaoDisponivel {
	const SIM = 'Sim';
	const NAO = 'Não';
	const PAGADOR_ESCOLHE = 'PagadorEscolhe';

	/**
	 * @var	string
	 */
	private $opcaoDisponivel;

	/**
	 * @var	array
	 */
	private $opcoesDisponiveis = array(
		MoIPOpcaoDisponivel::SIM , MoIPOpcaoDisponivel::NAO , MoIPOpcaoDisponivel::PAGADOR_ESCOLHE
	);

	/**
	 * @param	string $opcaoDisponivel
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $opcaoDisponivel ) {
		if ( in_array( $opcaoDisponivel , $this->opcoesDisponiveis ) ) {
			$this->opcaoDisponivel = $opcaoDisponivel;
		} else {
			throw new InvalidArgumentException( 'Opção disponível inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->opcaoDisponivel;
	}
}