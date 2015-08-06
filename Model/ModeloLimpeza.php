<?php
include('conexao.php');

class ModeloLimpeza{

	private $idModelo;
	private $descricao;
	private $tempoEstimado;
	private $dataProgramado;
	private $planta;
	private $usuario;
	private $agentes;

	function __construct()
	{
	}

	public function novoModeloLimpeza(){
		$novaPlanta = new Planta();
		$novosAgente = new Agente();

		$modeloLimpeza = new ModeloLimpeza();
		$modeloLimpeza->setPlanta($novaPlanta->carregarPlantaUsuario($_COOKIE['idUsuario']));	
		$modeloLimpeza->setAgentes($novosAgente->recuperarDadosAgenteLimpeza(null,$_COOKIE['idUsuario'] ));
		$modeloLimpeza->setDataProgramado('');	
		$modeloLimpeza->setDescricao('');
		$modeloLimpeza->setTempoEstimado('');	
		return $modeloLimpeza;
			
	}

	public function salvarModeloLimpeza($modeloLimpeza){


        $inserirModelo = "INSERT INTO syslimp.modelo
                            (descricao,
                            data,
                            idUsuario,
                            tempoEstimado,
                            idPlanta)
                            VALUES
                            ('{$modeloLimpeza->getDescricao()}',
                            '".str_replace("/", "-", $modeloLimpeza->getDataProgramado())."',
                            {$modeloLimpeza->getUsuario()},
                            0,
                            {$modeloLimpeza->getPlanta()->getIdPlanta()})
                            ";
        

                
            
	}

	public function recuperarModeloLimpeza($idModelo){

	}

	public function excluirModeloLimpeza($idModelo){

	}

	public static function listarModelosLimpeza(){

	}

    public function getIdModelo(){
        return $this->idModelo;
    }

    public function setIdModelo($idModelo){
        $this->idModelo = $idModelo;
    }


    public function getDescricao(){
        return $this->descricao;
    }


    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }


    public function getTempoEstimado(){
        return $this->tempoEstimado;
    }


    public function setTempoEstimado($tempoEstimado){
        $this->tempoEstimado = $tempoEstimado;
    }


    public function getDataProgramado(){
        return $this->dataProgramado;
    }


    public function setDataProgramado($dataProgramado){
        $this->dataProgramado = $dataProgramado;
    }


    public function getPlanta(){
        return $this->planta;
    }


    public function setPlanta($planta){
        $this->planta = $planta;

    }


    public function getUsuario(){
        return $this->usuario;
    }


    public function setUsuario($usuario){
        $this->usuario = $usuario;

        return $this;
    }


    public function getAgentes(){
        return $this->agentes;
    }


    public function setAgentes($agentes){
        $this->agentes = $agentes;
    }
}
?>