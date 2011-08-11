<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPTelefoneFixoComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $telefoneFixo;

	public function __construct( $telefoneFixo ) {
		parent::__construct();

		$this->telefoneFixo = $telefoneFixo;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<TelefoneFixo>%s</TelefoneFixo>' , $this->telefoneFixo );
	}
}