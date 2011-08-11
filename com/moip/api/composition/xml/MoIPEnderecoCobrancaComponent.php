<?php
require_once 'moip/composition/MoIPComposite.php';

class MoIPEnderecoCobrancaComponent extends MoIPComposite {
	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<EnderecoCobranca>%s</EnderecoCobranca>' , $this->drawChildren() );
	}
}