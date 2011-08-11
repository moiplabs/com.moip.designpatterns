<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Implementação do nó Apelido
 */
class MoIPURLLogoComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $urlLogo;

	public function __construct( $urlLogo ) {
		parent::__construct();

		$this->urlLogo = $urlLogo;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<URLLogo>%s</URLLogo>' , $this->urlLogo );
	}
}