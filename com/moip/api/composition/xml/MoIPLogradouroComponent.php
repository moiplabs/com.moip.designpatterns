<?php
require_once 'moip/composition/MoIPComponent.php';

class MoIPLogradouroComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $logradouro;

	public function __construct( $logradouro ) {
		parent::__construct();

		$this->logradouro = $logradouro;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Logradouro>%s</Logradouro>' , $this->logradouro );
	}
}