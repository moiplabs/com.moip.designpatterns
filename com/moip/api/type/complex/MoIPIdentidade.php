<?php
final class MoIPIdentidade {
	/**
	 * @var	string
	 */
	private $identidade;

	/**
	 * @var	MoIPTipoIdentidade
	 */
	private $tipo;

	/**
	 * Recupera o valor de $identidade
	 * @return	string
	 */
	public function getIdentidade() {
		return $this->identidade;
	}

	/**
	 * Recupera o valor de $tipo
	 * @return	MoIPTipoIdentidade
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param	string $identidade
	 */
	public function setIdentidade( $identidade ) {
		$this->identidade = $identidade;
	}

	/**
	 * @param	MoIPTipoIdentidade $tipo
	 */
	public function setTipo( MoIPTipoIdentidade $tipo ) {
		$this->tipo = $tipo;
	}
}