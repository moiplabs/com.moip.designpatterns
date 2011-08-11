<?php
final class MoIPTipoRestricao {
	const AUTORIZACAO = 'Autorizacao';
	const PAGAMENTO = 'Pagamento';

	/**
	 * @var	string
	 */
	private $tipoRestricao;

	/**
	 * @var	array
	 */
	private $tiposRestricao = array(
		MoIPTipoRestricao::AUTORIZACAO , MoIPTipoRestricao::PAGAMENTO
	);

	/**
	 * @param	string $tipoRestricao
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoRestricao ) {
		if ( in_array( $tipoRestricao , $this->tiposRestricao ) ) {
			$this->tipoRestricao = $tipoRestricao;
		} else {
			throw new InvalidArgumentException( 'Tipo de restrição inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoRestricao;
	}
}