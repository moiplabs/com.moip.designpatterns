<?php
require_once 'com/moip/api/MoIPComposite.php';

/**
 * Implementação do nó Valores
 */
class MoIPValoresComponent extends MoIPComposite {
	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Valores>%s</Valores>' , $this->drawChildren() );
	}
}