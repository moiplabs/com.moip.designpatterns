<?php
require_once 'moip/composition/MoIPComponent.php';

/**
 * Implementação do nó TelefoneCelular.
 */
class MoIPTelefoneCelularComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $telefoneCelular;

	public function __construct( $telefoneCelular ) {
		parent::__construct();

		$this->telefoneCelular = $telefoneCelular;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<TelefoneCelular>%s</TelefoneCelular>' , $this->telefoneCelular );
	}
}