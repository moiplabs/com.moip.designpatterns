<?php
/**
 * Base para a implementação de um componente em uma hierarquia de
 * componentes na integração com a API do MoIP.
 */
abstract class MoIPComponent {
	/**
	 * @var	array
	 */
	private $attributes;

	/**
	 * Constroi o objeto da composição inicializando as propriedades
	 * com seus valores padrões.
	 */
	public function __construct() {
		$this->attributes = array();
	}

	/**
	 * Adiciona um atributo ao componente.
	 * @param	string $name Nome do atributo.
	 * @param	string $value Valor do atributo.
	 */
	public function addAttribute( $name , $value ) {
		$this->attributes[ $name ] = $value;
	}

	/**
	 * Recupera uma string que representa o componente.
	 * @return	string
	 */
	public abstract function draw();

	/**
	 * Desenha os atributos do componente.
	 * @return	string
	 */
	protected function drawAttributes() {
		$attributes = null;

		foreach ( $this->attributes as $name => $value ) {
			$attributes .= sprintf( ' %s="%s"' , $name , $value );
		}

		return $attributes;
	}
}