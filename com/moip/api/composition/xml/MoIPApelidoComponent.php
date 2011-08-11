<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Implementação do nó Apelido
 */
class MoIPApelidoComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $apelido;

	public function __construct( $apelido ) {
		parent::__construct();

		$this->apelido = $apelido;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Apelido>%s</Apelido>' , $this->apelido );
	}
}