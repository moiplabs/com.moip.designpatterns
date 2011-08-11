<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPEstadoComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $estado;

	public function __construct( $estado ) {
		parent::__construct();

		$this->estado = $estado;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Estado>%s</Estado>' , $this->estado );
	}
}