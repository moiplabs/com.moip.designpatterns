<?php
final class MoIPRestricoes implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $restricao = array();

	/**
	 * Adiciona uma restrição
	 * @param	MoIPRestricao $restricao
	 */
	public function addRestricao( MoIPRestricao $restricao ) {
		$this->restricao[] = $restricao;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->restricao );
	}

	/**
	 * Define uma lista de restrições
	 * @param	array $restricoes
	 */
	public function setRestricao( array $restricoes ) {
		foreach ( $restricoes as $restricao ) {
			if ( $restricao instanceof MoIPRestricao ) {
				$this->addRestricao( $restricao );
			}
		}
	}
}