<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPIdentidadeComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $identidade;

	public function __construct( $identidade ) {
		parent::__construct();

		$this->identidade = $identidade;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Identidade>%s</Identidade>' , $this->identidade );
	}
}