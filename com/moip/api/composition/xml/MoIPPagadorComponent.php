<?php
require_once 'moip/composition/MoIPComposite.php';

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