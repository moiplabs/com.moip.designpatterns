<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPNumeroComponent extends MoIPComponent {
	/**
	 * @var	integer
	 */
	private $numero;

	public function __construct( $numero ) {
		parent::__construct();

		$this->numero = $numero;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Numero>%d</Numero>' , $this->numero );
	}
}