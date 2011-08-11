<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPCEPComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $cep;

	public function __construct( $cep ) {
		parent::__construct();

		$this->cep = $cep;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<CEP>%s</CEP>' , $this->cep );
	}
}