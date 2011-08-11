<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Implementação do nó Valor
 */
class MoIPValorComponent extends MoIPComponent {
	/**
	 * @var	float
	 */
	private $valor;

	/**
	 * Constroi o objeto que representa o nó Valor.
	 * @param	float $valor
	 * @param	string $moeda
	 */
	public function __construct( $valor , $moeda = 'BRL' ) {
		parent::__construct();

		$this->valor = (float) $valor;
		$this->addAttribute( 'moeda' , $moeda );
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Valor%s>%.02f</Valor>' , $this->drawAttributes() , $this->valor );
	}
}