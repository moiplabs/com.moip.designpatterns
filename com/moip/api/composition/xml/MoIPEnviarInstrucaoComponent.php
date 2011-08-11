<?php
require_once 'com/moip/api/MoIPComposite.php';

/**
 * Implementação do nó EnviarInstrucao do XML na integração com a API
 * do MoIP.
 */
class MoIPEnviarInstrucaoComponent extends MoIPComposite {
	/**
	 * Desenha o nó EnviarInstrucao
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<EnviarInstrucao>%s</EnviarInstrucao>' , $this->drawChildren() );
	}
}