<?php
require_once 'com/moip/api/MoIPComponent.php';

/**
 * Base para a implementação de um componente que aceita filhos
 * na formação de uma hierarquia de componentes na integração
 * com a API do MoIP.
 */
abstract class MoIPComposite extends MoIPComponent implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $children;

	/**
	 * Constroi o objeto da composição inicializando as propriedades
	 * com seus valores padrões.
	 */
	public function __construct() {
		parent::__construct();

		$this->children = array();
	}

	/**
	 * Adiciona um filho à composição.
	 * @param	MoIPComponent $child
	 * @return	MoIPComponent O filho recém adicionado.
	 */
	public function addChild( MoIPComponent $child ) {
		$this->children[] = $child;

		return $child;
	}

	/**
	 * Desenha todos os componentes da composição.
	 * @return	string
	 */
	protected function drawChildren() {
		$composition = null;

		foreach ( $this as $child ) {
			$composition .= $child->draw();
		}

		return $composition;
	}

	/**
	 * Recupera um Iterator com os componentes da composição.
	 * @return	Iterator
	 */
	public function getIterator() {
		return new ArrayIterator( $this->children );
	}
}