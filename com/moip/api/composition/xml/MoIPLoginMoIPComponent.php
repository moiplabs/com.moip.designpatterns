<?php
require_once 'moip/composition/MoIPComponent.php';

/**
 * Implementação do nó LoginMoIP.
 */
class MoIPLoginMoIPComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $loginMoIP;

	/**
	 * Constroi o objeto que representa o nó LoginMoIP.
	 * @param	string $loginMoIP
	 */
	public function __construct( $loginMoIP ) {
		parent::__construct();

		$this->loginMoIP = $loginMoIP;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<LoginMoIP>%s</LoginMoIP>' , $this->loginMoIP );
	}
}