<?php
final class MoIPFormaRestricao {
	const CONTADOR = 'Contador';
	const VALOR = 'Valor';

	/**
	 * @var	string
	 */
	private $formaRestricao;

	/**
	 * @var	array
	 */
	private $formasRestricao = array(
		MoIPFormaRestricao::CONTADOR , MoIPFormaRestricao::VALOR
	);

	/**
	 * @param	string $formaRestricao
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $formaRestricao ) {
		if ( in_array( $formaRestricao , $this->formasRestricao ) ) {
			$this->formaRestricao = $formaRestricao;
		} else {
			throw new InvalidArgumentException( 'Forma de restrição inválida' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->formaRestricao;
	}
}