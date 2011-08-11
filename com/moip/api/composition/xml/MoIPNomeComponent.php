<?php
require_once 'moip/composition/MoIPComponent.php';

/**
 * Implementação do nó Nome
 */
class MoIPNomeComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $nome;

	/**
	 * Constroi o objeto que representa o nó Nome.
	 * @param	string $nome
	 */
	public function __construct( $nome ) {
		parent::__construct();

		$this->nome = $nome;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Nome>%s</Nome>' , $this->nome );
	}
}