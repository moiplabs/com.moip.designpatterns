<?php
final class MoIPParcelamentos implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $parcelamento = array();

	/**
	 * Adiciona um parcelamento
	 * @param	MoIPParcelamento $parcelamento
	 */
	public function addParcelamento( MoIPParcelamento $parcelamento ) {
		$this->parcelamento[] = $parcelamento;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->parcelamento );
	}

	/**
	 * Define uma lista de parcelamentos
	 * @param	array $parcelamentos
	 */
	public function setParcelamento( array $parcelamentos ) {
		foreach ( $parcelamentos as $parcelamento ) {
			if ( $parcelamento instanceof MoIPParcelamento ) {
				$this->addParcelamento( $parcelamento );
			}
		}
	}
}