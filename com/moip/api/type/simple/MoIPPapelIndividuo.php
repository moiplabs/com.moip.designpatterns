<?php
final class MoIPPapelIndividuo {
	const COMISSIONADO = 'Comissionado';
	const INTEGRADOR = 'Integrador';
	const PAGADOR = 'Pagador';
	const RECEBEDOR = 'Recebedor';

	/**
	 * @var	string
	 */
	private $papelIndividuo;

	/**
	 * @var	array
	 */
	private $papeisIndividuo = array(
		MoIPPapelIndividuo::COMISSIONADO	, MoIPPapelIndividuo::INTEGRADOR,
		MoIPPapelIndividuo::PAGADOR			, MoIPPapelIndividuo::RECEBEDOR
	);

	/**
	 * @param	string $papelIndividuo
	 * @throws	InvalidArgumentException
	 */
	public function __construct( $papelIndividuo ) {
		if ( in_array( $papelIndividuo , $this->papeisIndividuo ) ) {
			$this->papelIndividuo = $papelIndividuo;
		} else {
			throw new InvalidArgumentException( 'Papel do indivíduo inválido.' );
		}
	}

	/**
	 * @return	string
	 */
	public function __toString() {
		return $this->papelIndividuo;
	}
}