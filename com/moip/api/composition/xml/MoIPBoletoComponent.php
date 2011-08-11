<?php
require_once 'moip/composition/MoIPComposite.php';

class MoIPBoletoComponent extends MoIPComposite {
	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Boleto>%s</Boleto>' , $this->drawChildren() );
	}
}