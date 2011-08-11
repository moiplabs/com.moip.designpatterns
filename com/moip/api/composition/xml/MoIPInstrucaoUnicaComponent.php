<?php
require_once 'com/moip/api/MoIPComposite.php';

/**
 * Implementação do nó InstrucaoUnica
 */
class MoIPInstrucaoUnicaComponent extends MoIPComposite {
	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<InstrucaoUnica>%s</InstrucaoUnica>' , $this->drawChildren() );
	}
}