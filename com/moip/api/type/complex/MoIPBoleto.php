<?php
final class MoIPBoleto {
	/**
	 * @var	string
	 */
	private $dataVencimento;

	/**
	 * @var	MoIPDias
	 */
	private $diasExpiracao;

	/**
	 * @var	string
	 */
	private $instrucao1;

	/**
	 * @var	string
	 */
	private $instrucao2;

	/**
	 * @var	string
	 */
	private $instrucao3;

	/**
	 * @var	string
	 */
	private $urlLogo;

	/**
	 * Recupera o valor de $dataVencimento
	 * @return	string
	 */
	public function getDataVencimento() {
		return $this->dataVencimento;
	}

	/**
	 * Recupera o valor de $diasExpiracao
	 * @return	MoIPDias
	 */
	public function getDiasExpiracao() {
		return $this->diasExpiracao;
	}

	/**
	 * Recupera o valor de $instrucao1
	 * @return	string
	 */
	public function getInstrucao1() {
		return $this->instrucao1;
	}

	/**
	 * Recupera o valor de $instrucao2
	 * @return	string
	 */
	public function getInstrucao2() {
		return $this->instrucao2;
	}

	/**
	 * Recupera o valor de $instrucao3
	 * @return	string
	 */
	public function getInstrucao3() {
		return $this->instrucao3;
	}

	/**
	 * Recupera o valor de $urlLogo
	 * @return	string
	 */
	public function getUrlLogo() {
		return $this->urlLogo;
	}

	/**
	 * @param	string $dataVencimento
	 */
	public function setDataVencimento( $dataVencimento ) {
		$this->dataVencimento = $dataVencimento;
	}

	/**
	 * @param	MoIPDias $diasExpiracao
	 */
	public function setDiasExpiracao( MoIPDias $diasExpiracao ) {
		$this->diasExpiracao = $diasExpiracao;
	}

	/**
	 * @param	string $instrucao1
	 */
	public function setInstrucao1( $instrucao1 ) {
		$this->instrucao1 = $instrucao1;
	}

	/**
	 * @param	string $instrucao2
	 */
	public function setInstrucao2( $instrucao2 ) {
		$this->instrucao2 = $instrucao2;
	}

	/**
	 * @param	string $instrucao3
	 */
	public function setInstrucao3( $instrucao3 ) {
		$this->instrucao3 = $instrucao3;
	}

	/**
	 * @param	string $urlLogo
	 * @throws	InvalidArgumentException
	 */
	public function setUrlLogo( $urlLogo ) {
		if ( filter_var( $urlLogo , FILTER_VALIDATE_URL ) ) {
			$this->urlLogo = $urlLogo;
		} else {
			throw new InvalidArgumentException( 'URL do logo é inválida' );
		}
	}
}