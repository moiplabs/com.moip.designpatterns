<?php
require_once 'com/moip/api/MoIPComposite.php';

/**
 * Implementação do nó Pagador.
 */
class MoIPPagadorComponent extends MoIPComposite {
	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Pagador>%s</Pagador>' , $this->drawChildren() );
	}
}