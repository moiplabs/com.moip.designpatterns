<?php
require_once 'com/moip/MoIP.php';
require_once 'com/moip/api/MoIPPagamentoDiretoStrategy.php';
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

//$strategy = new MoIPPagamentoDiretoStrategy( new MoIPAuthenticator( 'YTQ54YQLXTINWUP8YHS8S1DAYPCP7OZ5' , '5MO308HWJDMBGTDJKQXQVY3CRPBYDPLJJCMOGMV5' ) );
$strategy = new MoIPIntegracaoHTMLStrategy( 'teste@exemplo.com' , 'http://127.0.0.1' );

$moip = new MoIP( $strategy );
$moip->setRazao( 'Pagamento direto com boleto' );
$moip->addValor( 150.25 );
$moip->setIdProprio( 'dir_bol_2' );
$moip->setFormaPagamento( MoIPFormaPagamento::BOLETO_BANCARIO );
$moip->setPagador( $pagador );
$moip->setBoleto( $boleto );
$moip->execute();