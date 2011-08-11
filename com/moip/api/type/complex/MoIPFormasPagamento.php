<?php
final class MoIPFormasPagamento implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $formaPagamento = array();

	/**
	 * Adiciona uma forma de pagamento
	 * @param	MoIPFormasPagamento $formaPagamento
	 */
	public function addFormaPagamento( MoIPFormasPagamento $formaPagamento ) {
		$this->formaPagamento[] = $formaPagamento;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->formaPagamento );
	}

	/**
	 * Define uma lista de formas de pagamento
	 * @param	array $formasPagamento
	 */
	public function setFormasPagamento( array $formasPagamento ) {
		foreach ( $formasPagamento as $formaPagamento ) {
			if ( $formaPagamento instanceof MoIPFormaPagamento ) {
				$this->addFormaPagamento( $formaPagamento );
			}
		}
	}
}