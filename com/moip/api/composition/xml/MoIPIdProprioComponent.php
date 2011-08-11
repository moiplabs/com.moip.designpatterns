<?php
require_once 'moip/composition/MoIPComponent.php';

/**
 * Implementação do nó IdProprio.
 */
class MoIPIdProprioComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $idProprio;

	/**
	 * Constroi o objeto que representa o nó IdProprio
	 * @param	string $idProprio
	 */
	public function __construct( $idProprio ) {
		parent::__construct();

		$this->idProprio = $idProprio;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<IdProprio>%s</IdProprio>' , $this->idProprio );
	}
}