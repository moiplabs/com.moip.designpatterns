<?php
require_once 'com/moip/api/MoIPComponent.php';

class MoIPPaisComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $pais;

	public function __construct( $pais ) {
		parent::__construct();

		$this->pais = $pais;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Pais>%s</Pais>' , $this->pais );
	}
}