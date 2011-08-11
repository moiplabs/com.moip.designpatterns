<?php
require_once 'com/moip/api/MoIPAPIStrategy.php';
require_once 'com/moip/api/composition/html/MoIPFormComponent.php';
require_once 'com/moip/api/composition/html/MoIPInputComponent.php';

class MoIPIntegracaoHTMLStrategy implements MoIPAPIStrategy {
	/**
	 * @var	string
	 */
	private $carteira;

	/**
	 * @var	string
	 */
	private $urlRetorno;

	public function __construct( $carteira , $urlRetorno ) {
		$this->carteira = $carteira;
		$this->urlRetorno = $urlRetorno;
	}

	/**
	 * @param	MoIP $context
	 * @see		MoIPAPIStrategy::execute()
	 */
	public function execute( MoIP $context ) {
		$form = new MoIPFormComponent();
		$valor = current( $context->getValores() )->getValor();
		$valor = (int) ($valor * 100);

		$form->addChild( new MoIPInputComponent( 'id_carteira' , $this->carteira ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'url_retorno' , $this->urlRetorno ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'valor' , $valor ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'nome' , $context->getRazao() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'id_transacao' , $context->getIdProprio() ) )->addAttribute( 'type' , 'hidden' );

		$pagador = $context->getPagador();

		$form->addChild( new MoIPInputComponent( 'pagador_nome' , $pagador->getNome() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_email' , $pagador->getEmail() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_celular' , $pagador->getTelefoneCelular() ) )->addAttribute( 'type' , 'hidden' );

		$identidade = $pagador->getIdentidade();
		$form->addChild( new MoIPInputComponent( 'pagador_' . $identidade->getTipo() , $identidade->getIdentidade() ) )->addAttribute( 'type' , 'hidden' );

		$endereco = $pagador->getEnderecoCobranca();

		$form->addChild( new MoIPInputComponent( 'pagador_logradouro' , $endereco->getLogradouro() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_numero' , $endereco->getNumero() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_complemento' , $endereco->getComplemento() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_bairro' , $endereco->getBairro() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_cep' , $endereco->getCep() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_cidade' , $endereco->getCidade() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_estado' , $endereco->getEstado() ) )->addAttribute( 'type' , 'hidden' );
		$form->addChild( new MoIPInputComponent( 'pagador_pais' , $endereco->getPais() ) )->addAttribute( 'type' , 'hidden' );

		echo $form->draw();
	}
}