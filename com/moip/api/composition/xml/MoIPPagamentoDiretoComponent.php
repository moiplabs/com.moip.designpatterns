<?php
require_once 'moip/composition/MoIPComposite.php';

/**
 * Implementação do nó PagamentoDireto.
 */
class MoIPPagamentoDiretoComponent extends MoIPComposite {
	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<PagamentoDireto>%s</PagamentoDireto>' , $this->drawChildren() );
	}
}