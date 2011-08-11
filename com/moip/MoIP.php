<?php
require_once 'com/moip/api/type/complex/MoIPValorMonetario.php';
require_once 'com/moip/api/type/simple/MoIPFormaPagamento.php';

/**
 * Wrapper para integração com a API do MoIP.
 */
class MoIP {
	/**
	 * @var	MoIPBoleto
	 */
	private $boleto;

	/**
	 * @var	MoIPFormaPagamento
	 */
	private $formaPagamento;

	/**
	 * @var	string
	 */
	private $idProprio;

	/**
	 * @var	MoIPIndividuo
	 */
	private $pagador;

	/**
	 * @var	string
	 */
	private $razao;

	/**
	 * @var	array
	 */
	private $valores = array();

	/**
	 * @var	MoIPAPIStrategy
	 */
	private $strategy;

	public function __construct( MoIPAPIStrategy $strategy ) {
		$this->strategy = $strategy;
	}

	/**
	 * @param	MoIPValorMonetario $valor
	 */
	public function addValor( $valor ) {
		if ( is_float( $valor ) ) {
			$valorMonetario = new MoIPValorMonetario();
			$valorMonetario->setValor( $valor );

			$this->valores[] = $valorMonetario;
		} else if ( !is_object( $valor ) || !( $valor instanceof MoIPValorMonetario ) ){
			throw new UnexpectedValueException( 'Valor inesperado para valor' );
		} else {
			$this->valores[] = $valor;
		}
	}

	public function execute() {
		return $this->strategy->execute( $this );
	}

	/**
	 * Recupera o valor de $boleto
	 * @return	MoIPBoleto
	 */
	public function getBoleto() {
		return $this->boleto;
	}

	/**
	 * Recupera o valor de $formaPagamento
	 * @return	MoIPFormaPagamento
	 */
	public function getFormaPagamento() {
		return $this->formaPagamento;
	}

	/**
	 * Recupera o valor de $idProprio
	 * @return	string
	 */
	public function getIdProprio() {
		return $this->idProprio;
	}

	/**
	 * Recupera o valor de $pagador
	 * @return	MoIPIndividuo
	 */
	public function getPagador() {
		return $this->pagador;
	}

	/**
	 * Recupera o valor de $razao
	 * @return	string
	 */
	public function getRazao() {
		return $this->razao;
	}

	/**
	 * Recupera o valor de $valores
	 * @return	array
	 */
	public function getValores() {
		return $this->valores;
	}

	/**
	 * @param MoIPBoleto $boleto
	 */
	public function setBoleto( MoIPBoleto $boleto ) {
		$this->boleto = $boleto;
	}

	/**
	 * @param MoIPFormaPagamento $formaPagamento
	 */
	public function setFormaPagamento( $formaPagamento ) {
		if ( is_string( $formaPagamento ) ) {
			$formaPagamento = new MoIPFormaPagamento( $formaPagamento );
		} else if ( !is_object( $formaPagamento ) || !( $formaPagamento instanceof MoIPFormaPagamento ) ) {
			throw new UnexpectedValueException( 'Forma de pagamento não esperada' );
		}

		$this->formaPagamento = $formaPagamento;
	}

	/**
	 * @param string $idProprio
	 */
	public function setIdProprio( $idProprio ) {
		$this->idProprio = $idProprio;
	}

	/**
	 * @param MoIPIndividuo $pagador
	 */
	public function setPagador( MoIPIndividuo $pagador ) {
		$this->pagador = $pagador;
	}

	/**
	 * @param string $razao
	 */
	public function setRazao( $razao ) {
		$this->razao = $razao;
	}

	/**
	 * @param MoIPValores $valores
	 */
	public function setValores( array $valores ) {
		$this->valores = array();

		foreach ( $valores as $valor ) {
			if ( $valor instanceof MoIPValorMonetario ) {
				$this->addValor( $valor );
			}
		}
	}
}