<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Implementação de um INPUT em uma integração HTML com a API
 * do MoIP.
 */
class MoIPInputComponent extends MoIPComponent {
	/**
	 * Constroi o componente que representa um input de formulário
	 * na integração com a API do MoIP.
	 * @param	string $name Atributo name do input
	 * @param	string $value Atribute value do input
	 */
	public function __construct( $name , $value ) {
		parent::__construct();

		$this->addAttribute( 'type' , 'hidden' );
		$this->addAttribute( 'name' , $name );
		$this->addAttribute( 'value' , $value );
	}

	/**
	 * Desenha o Input
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<input%s />' , $this->drawAttributes() );
	}
}