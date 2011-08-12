<?php
require_once 'com/moip/api/MoIPInstrucaoUnicaStrategy.php';

class MoIPPagamentoDiretoStrategy extends MoIPInstrucaoUnicaStrategy {
	/**
	 * @param	MoIP $context
	 * @see		MoIPAPIStrategy::execute()
	 */
	public function execute( MoIP $context ) {
		$enviarInstrucaoComponent = new MoIPEnviarInstrucaoComponent();

		$instrucaoUnicaComponent = $this->createInstrucaoUnicaComponent( $context , $enviarInstrucaoComponent );

		// Definindo o Pagamento Direto
		$instrucaoUnicaComponent->addChild( new MoIPPagamentoDiretoComponent() )
								->addChild( new MoIPFormaComponent( $context->getFormaPagamento() ) );

		return $this->request( $enviarInstrucaoComponent )->getContent();
	}
}