<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPComplementoComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $complemento;

	public function __construct( $complemento ) {
		parent::__construct();

		$this->complemento = $complemento;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Complemento>%s</Complemento>' , $this->complemento );
	}
}