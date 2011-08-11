<?php
require_once 'com/moip/api/MoIPComponent.php';
require_once '';

class MoIPDiasExpiracaoComponent extends MoIPComponent {
	/**
	 * @var	integer
	 */
	private $dias;

	public function __construct( $dias , $tipo = MoIPTipoDias::CORRIDOS ) {
		parent::__construct();

		$this->dias = $dias;
		$this->addAttribute( 'tipo' , $tipo );
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<DiasExpiracao%s>%s</DiasExpiracao>' , $this->drawAttributes() , $this->dias );
	}
}