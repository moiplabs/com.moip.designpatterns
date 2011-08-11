<?php
final class MoIPMensagens implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $mensagem = array();

	/**
	 * Adiciona uma mensagem
	 * @param	string $mensagem
	 */
	public function addMensagem( $mensagem ) {
		$this->mensagem[] = $mensagem;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->mensagem );
	}

	/**
	 * Adiciona uma lista de mensagens
	 * @param	array $mensagens
	 */
	public function setMensagem( array $mensagens ) {
		foreach ( $mensagens as $mensagem ) {
			$this->mensagen[] = $mensagem;
		}
	}
}