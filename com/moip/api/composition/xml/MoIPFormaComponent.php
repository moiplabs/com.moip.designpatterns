<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Implementação do nó Forma.
 */
class MoIPFormaComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $forma;

	/**
	 * Constroi o objeto que representa o nó Forma.
	 * @param	string $forma
	 */
	public function __construct( $forma ) {
		parent::__construct();

		$this->forma = $forma;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Forma>%s</Forma>' , $this->forma );
	}
}