<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPCidadeComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $cidade;

	public function __construct( $cidade ) {
		parent::__construct();

		$this->cidade = $cidade;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Cidade>%s</Cidade>' , $this->cidade );
	}
}