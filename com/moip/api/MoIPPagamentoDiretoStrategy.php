<?php
require_once 'com/moip/api/MoIPAbstractHttpStrategy.php';
require_once 'com/moip/api/composition/xml/MoIPApelidoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPBairroComponent.php';
require_once 'com/moip/api/composition/xml/MoIPBoletoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPCEPComponent.php';
require_once 'com/moip/api/composition/xml/MoIPCidadeComponent.php';
require_once 'com/moip/api/composition/xml/MoIPComplementoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPDiasExpiracaoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPEmailComponent.php';
require_once 'com/moip/api/composition/xml/MoIPEnderecoCobrancaComponent.php';
require_once 'com/moip/api/composition/xml/MoIPEnviarInstrucaoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPEstadoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPFormaComponent.php';
require_once 'com/moip/api/composition/xml/MoIPIdentidadeComponent.php';
require_once 'com/moip/api/composition/xml/MoIPIdProprioComponent.php';
require_once 'com/moip/api/composition/xml/MoIPInstrucaoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPInstrucaoUnicaComponent.php';
require_once 'com/moip/api/composition/xml/MoIPLoginMoIPComponent.php';
require_once 'com/moip/api/composition/xml/MoIPLogradouroComponent.php';
require_once 'com/moip/api/composition/xml/MoIPNomeComponent.php';
require_once 'com/moip/api/composition/xml/MoIPNumeroComponent.php';
require_once 'com/moip/api/composition/xml/MoIPPagadorComponent.php';
require_once 'com/moip/api/composition/xml/MoIPPagamentoDiretoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPPaisComponent.php';
require_once 'com/moip/api/composition/xml/MoIPRazaoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPTelefoneCelularComponent.php';
require_once 'com/moip/api/composition/xml/MoIPTelefoneFixoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPURLLogoComponent.php';
require_once 'com/moip/api/composition/xml/MoIPValorComponent.php';
require_once 'com/moip/api/composition/xml/MoIPValoresComponent.php';

class MoIPPagamentoDiretoStrategy extends MoIPAbstractHttpStrategy {
	/**
	 * @param	MoIP $context
	 * @see		MoIPAPIStrategy::execute()
	 */
	public function execute( MoIP $context ) {
		$enviarInstrucaoComponent = new MoIPEnviarInstrucaoComponent();

		// Identificador do tipo da instrução
		$instrucaoUnicaComponent = $enviarInstrucaoComponent->addChild( new MoIPInstrucaoUnicaComponent() );

		// Dados da transação
		$instrucaoUnicaComponent->addChild( new MoIPRazaoComponent( $context->getRazao() ) );

		$valoresComponent = $instrucaoUnicaComponent->addChild( new MoIPValoresComponent() );

		foreach ( $context->getValores() as $valor ) {
			$valoresComponent->addChild( new MoIPValorComponent( $valor->getValor() , $valor->getMoeda() ) );
		}

		// Definindo o Pagamento Direto
		$instrucaoUnicaComponent->addChild( new MoIPPagamentoDiretoComponent() )
								->addChild( new MoIPFormaComponent( $context->getFormaPagamento() ) );

		// Dados do pagador
		$pagador = $context->getPagador();

		$pagadorComponent = $instrucaoUnicaComponent->addChild( new MoIPPagadorComponent() );
		$pagadorComponent->addChild( new MoIPNomeComponent( $pagador->getNome() ) );
		$pagadorComponent->addChild( new MoIPLoginMoIPComponent( $pagador->getLoginMoIP() ) );
		$pagadorComponent->addChild( new MoIPEmailComponent( $pagador->getEmail() ) );
		$pagadorComponent->addChild( new MoIPTelefoneCelularComponent( $pagador->getTelefoneCelular() ) );
		$pagadorComponent->addChild( new MoIPApelidoComponent( $pagador->getApelido() ) );
		$pagadorComponent->addChild( new MoIPIdentidadeComponent( $pagador->getIdentidade()->getIdentidade() ) );

		$enderecoCobranca = $pagador->getEnderecoCobranca();
		$enderecoCobrancaComponent = $pagadorComponent->addChild( new MoIPEnderecoCobrancaComponent() );
		$enderecoCobrancaComponent->addChild( new MoIPLogradouroComponent( $enderecoCobranca->getLogradouro() ) );
		$enderecoCobrancaComponent->addChild( new MoIPNumeroComponent( $enderecoCobranca->getNumero() ) );
		$enderecoCobrancaComponent->addChild( new MoIPComplementoComponent( $enderecoCobranca->getComplemento() ) );
		$enderecoCobrancaComponent->addChild( new MoIPBairroComponent( $enderecoCobranca->getBairro() ) );
		$enderecoCobrancaComponent->addChild( new MoIPCidadeComponent( $enderecoCobranca->getCidade() ) );
		$enderecoCobrancaComponent->addChild( new MoIPEstadoComponent( $enderecoCobranca->getEstado() ) );
		$enderecoCobrancaComponent->addChild( new MoIPPaisComponent( $enderecoCobranca->getPais() ) );
		$enderecoCobrancaComponent->addChild( new MoIPCEPComponent( $enderecoCobranca->getCep() ) );
		$enderecoCobrancaComponent->addChild( new MoIPTelefoneFixoComponent( $enderecoCobranca->getTelefone() ) );

		// Dados extra
		$boleto = $context->getBoleto();

		$boletoComponent = $instrucaoUnicaComponent->addChild( new MoIPBoletoComponent() );

		$diasExpiracao = $boleto->getDiasExpiracao();
		$boletoComponent->addChild( new MoIPDiasExpiracaoComponent( $diasExpiracao->getDias() , $diasExpiracao->getTipo() ) );

		$xml = '<?xml version="1.0"?>' . PHP_EOL;
		$xml.= $enviarInstrucaoComponent->draw();

		$httpConnection = $this->createHttpConnection();
		$httpConnection->initialize( 'desenvolvedor.moip.com.br' , true );
		$httpConnection->setRequestBody( $xml );

		return $httpConnection->execute( '/sandbox/ws/alpha/EnviarInstrucao/Unica' , HTTPRequestMethod::POST )->getContent();
	}
}