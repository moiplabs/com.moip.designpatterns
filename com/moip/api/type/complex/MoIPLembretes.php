<?php
final class MoIPLembretes {
	/**
	 * @var	MoIPLembreteRecorrente
	 */
	private $lembreteRecorrente;

	/**
	 * @var	MoIPLembreteUnico
	 */
	private $lembreteUnico;

	/**
	 * Recupera o valor de $lembreteRecorrente
	 * @return	MoIPLembreteRecorrente
	 */
	public function getLembreteRecorrente() {
		return $this->lembreteRecorrente;
	}

	/**
	 * Recupera o valor de $lembreteUnico
	 * @return	MoIPLembreteUnico
	 */
	public function getLembreteUnico() {
		return $this->lembreteUnico;
	}

	/**
	 * @param	MoIPLembreteRecorrente $lembreteRecorrente
	 */
	public function setLembreteRecorrente( MoIPLembreteRecorrente $lembreteRecorrente ) {
		$this->lembreteRecorrente = $lembreteRecorrente;
	}

	/**
	 * @param	MoIPLembreteUnico $lembreteUnico
	 */
	public function setLembreteUnico( MoIPLembreteUnico $lembreteUnico ) {
		$this->lembreteUnico = $lembreteUnico;
	}
}