<?php
final class MoIPComissoes implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $comissionamento = array();

	/**
	 * Adiciona um comissionamento
	 * @param	MoIPComissionamento $comissionamento
	 */
	public function addComissionamento( MoIPComissionamento $comissionamento ) {
		$this->comissionamento[] = $comissionamento;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->comissionamento );
	}

	/**
	 * Define comissionamentos
	 * @param	array $comissionamentos
	 */
	public function setComissionamentos( array $comissionamentos ) {
		foreach ( $comissionamentos as $comissionamento ) {
			if ( $comissionamento instanceof MoIPComissionamento ) {
				$this->addComissionamento( $comissionamento );
			}
		}
	}
}