<?php
require_once 'moip/composition/MoIPComposite.php';

/**
 * Implementação do formulário em uma integração HTML com a API
 * do MoIP.
 */
class MoIPFormComponent extends MoIPComposite {
	/**
	 * Constroi o objeto que representa um formulário HTML para
	 * integração com a API do MoIP.
	 * @param	string $action Atributo action do formulário
	 */
	public function __construct( $action = 'https://www.moip.com.br/PagamentoMoIP.do' ) {
		parent::__construct();

		$this->addAttribute( 'action' , $action );
		$this->addAttribute( 'method' , 'post' );
	}

	/**
	 * Desenha o formulário
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<form%s>%s</form>' , $this->drawAttributes() , $this->drawChildren() );
	}
}