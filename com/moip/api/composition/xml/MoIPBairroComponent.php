<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPBairroComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $bairro;

	public function __construct( $bairro ) {
		parent::__construct();

		$this->bairro = $bairro;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Bairro>%s</Bairro>' , $this->bairro );
	}
}