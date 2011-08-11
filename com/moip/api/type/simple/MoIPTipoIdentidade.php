<?php
final class MoIPTipoIdentidade {
	const CNPJ = 'CNPJ';
	const CPF = 'CPF';

	/**
	 * @var	string
	 */
	private $tipoIdentidade;

	/**
	 * @var	array
	 */
	private $tiposIdentidade = array(
		MoIPTipoIdentidade::CNPJ , MoIPTipoIdentidade::CPF
	);

	/**
	 * @param	string $tipoIdentidade
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $tipoIdentidade ) {
		if ( in_array( $tipoIdentidade , $this->tiposIdentidade ) ) {
			$this->tipoIdentidade = $tipoIdentidade;
		} else {
			throw new InvalidArgumentException( 'Tipo de identidade inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->tipoIdentidade;
	}
}