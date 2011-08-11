<?php
/**
 * Interface para criação de uma composição de acordo
 * com o tipo de integração com a API do MoIP.
 */
interface MoIPAPIStrategy {
	/**
	 * Executa a ação adequada para o tipo de integração.
	 * @param	MoIPAPI $context
	 */
	public function execute( MoIPAPI $context );
}