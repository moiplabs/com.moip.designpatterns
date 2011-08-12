<?php
require_once 'com/moip/MoIP.php';
require_once 'com/moip/api/MoIPPagamentoDiretoStrategy.php';
require_once 'com/moip/api/MoIPInstrucaoUnicaStrategy.php';
require_once 'com/moip/api/MoIPIntegracaoHTMLStrategy.php';
require_once 'com/moip/api/type/complex/MoIPIndividuo.php';
require_once 'com/moip/api/type/complex/MoIPBoleto.php';
require_once 'com/moip/api/type/simple/MoIPFormaPagamento.php';
require_once 'com/moip/api/MoIPAuthenticator.php';

$enderecoCobranca = new MoIPEndereco();
$enderecoCobranca->setLogradouro( 'Rua dos bobos' );
$enderecoCobranca->setNumero( 0 );
$enderecoCobranca->setBairro( 'Bairro' );
$enderecoCobranca->setCidade( 'Cidade' );
$enderecoCobranca->setEstado( 'SP' );

$pagador = new MoIPIndividuo();
$pagador->setNome( 'Fulano de tal' );
$pagador->setLoginMoIP( 'fulano' );
$pagador->setEmail( 'fulano@detal.com' );
$pagador->setTelefoneCelular( '9999-9999' );
$pagador->setApelido( 'fulano' );
$pagador->setIdentidade( '111.111.111-11' );
$pagador->setEnderecoCobranca( $enderecoCobranca );

$boleto = new MoIPBoleto();
$boleto->setDiasExpiracao( 5 );

//Dados de autenticação
$token = 'token_da_conta_MoIP';
$key = 'key_da_conta_MoIP';

//Estratégia de integração com Pagamento Direto
//$strategy = new MoIPPagamentoDiretoStrategy( new MoIPAuthenticator( $token , $key ) );

//Estratégia de integração com Instrução Única
$strategy = new MoIPInstrucaoUnicaStrategy( new MoIPAuthenticator( $token , $key ) );

//Estratégia de integração HTML
//$strategy = new MoIPIntegracaoHTMLStrategy( 'teste@exemplo.com' , 'http://127.0.0.1' );

$moip = new MoIP( $strategy );
$moip->setRazao( 'Pagamento com boleto' );
$moip->addValor( 150.25 );
$moip->setIdProprio( 'dir_bol_2' );
$moip->setFormaPagamento( MoIPFormaPagamento::BOLETO_BANCARIO );
$moip->setPagador( $pagador );
$moip->setBoleto( $boleto );
var_dump( $moip->execute() );