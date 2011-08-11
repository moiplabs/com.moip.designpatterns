<?php
require_once 'moip/composition/MoIPComponent.php';

/**
 * Implementação do nó Email.
 */
class MoIPEmailComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $email;

	/**
	 * Constroi o objeto que representa o nó Email.
	 * @param	string $email
	 */
	public function __construct( $email ) {
		parent::__construct();

		$this->email = $email;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
	}
}