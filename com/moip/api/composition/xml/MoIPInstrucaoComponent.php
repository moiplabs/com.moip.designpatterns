<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Implementação do nó Apelido
 */
class MoIPInstrucaoComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $instrucao;

	/**
	 * @var	integer
	 */
	private $num;

	public function __construct( $instrucao , $num = 1 ) {
		parent::__construct();

		$this->instrucao = $instrucao;
		$this->num = $num;
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Instrucao%d>%s</Instrucao%d>' , $this->num , $this->instrucao , $this->num );
	}
}