<?php
// include('../lib/php/util.php');

/**
* 
*/
class AgenteController{
		
	private $agente;

	function __construct()
	{
		$this->agente = new Agente();
	}

	public function novoAgente(){
		$agenteTela = new Agente();
		$tituloPagina = "Novo Agente";
		include('../View/agenteUnico.php');
	}

	public function salvarAgente($idAgente, $descricao, $codigoAgente){



		$agenteParaSalvar = new Agente();
		$agenteParaSalvar->setIdAgente($idAgente);
		$agenteParaSalvar->setDescricao($descricao);
		$agenteParaSalvar->setCodigoAgente($codigoAgente);

		if($agenteParaSalvar){
			$resultadoSalvarAgente = $this->agente->salvarAgente($agenteParaSalvar);
		}

		unset($agenteParaSalvar);
		$this->listarAgentes();			
			
	}

	public function recuperarAgente($idAgente){
		$agenteTela = $this->agente->recuperarAgente($idAgente);
		include('../View/agenteUnico.php');
	}

	public function excluirAgente($idAgente){

	}

	public function listarAgentes(){
		$listaDeAgentes = Agente::listarAgentes(1);
		include('../View/agentePrincipal.php');
	}
}

?>