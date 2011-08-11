<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Implementação do nó Razao
 */
class MoIPRazaoComponent extends MoIPComponent {
	/**
	 * @var	string
	 */
	private $razao;

	/**
	 * @param	string $razao
	 */
	public function __construct( $razao ) {
		parent::__construct();

		$this->setRazao( $razao );
	}

	/**
	 * @return	string
	 * @see		MoIPComponent::draw()
	 */
	public function draw() {
		return sprintf( '<Razao>%s</Razao>' , $this->razao );
	}

	/**
	 * @return	string
	 */
	public function getRazao() {
		return $this->razao;
	}

	/**
	 * @param	string $razao
	 */
	public function setRazao( $razao ) {
		$this->razao = $razao;
	}
}