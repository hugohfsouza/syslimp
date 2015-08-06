<?php

class ModeloLimpezaController{

	private $modeloLimpeza;
	
	function __construct()
	{
		$this->modeloLimpeza = new ModeloLimpeza();
	}

	public function novoModelo(){

		$novoModeloLimpeza = $this->modeloLimpeza->novoModeloLimpeza();			
		$this->modeloLimpeza = $novoModeloLimpeza;
		include('../View/modeloUnico.php');
									
	}

	public function recuperarModelo($idModelo){

	}

	public function salvarModelo($planta, $descricao, $agentes, $dataHora, $objetoPlantaDoModelo){
		$novoModeloLimpeza = new ModeloLimpeza();

		$objetoAgente = new Agente();			
		$agentesEscolhidos = array();

		foreach ($agentes as $cadaAgente) {
			 $objetoAgente->setIdAgente($cadaAgente);
			 $agentesEscolhidos[] = $objetoAgente;
		}		

		$novoModeloLimpeza->setDescricao($descricao);
		$novoModeloLimpeza->setDataProgramado($dataHora);
		$novoModeloLimpeza->setUsuario($_COOKIE['idUsuario']);
		$novoModeloLimpeza->setTempoEstimado(0);	
		$novoModeloLimpeza->setPlanta($objetoPlantaDoModelo);	
		$novoModeloLimpeza->setAgentes($agentesEscolhidos);			
		
		$novoModeloLimpeza->salvarModeloLimpeza($novoModeloLimpeza);
	}

	public function listarModelos(){

	}

	public function alterarModelos($idModelo, $planta, $descricao, $agentes, $dataHora){

	}

}


?>