<?php
include('conexao.php');

class Planta{

	private $coordenadas;
	private $idPlanta;
	private $areaTotal;
	private $descricao;
	private $qtdCoordenadasX;
	private $qtdCoordenadasY;

	public function fazerReconhecimento(){

	}

	public function recuperarCoordenadas(){

	}

	public function salvarPlanta($coordenadas, $descricao, $idPlanta){

	}

	public function excluirPlanta($idPlanta){

	}

	public function recuperarPlanta($idPlanta){

	}

	public function carregarPlantaUsuario($idUsuario){

		$buscaPlantaUsuario = "SELECT idPlanta, descricao, qtdCoordenadasX, qtdCoordenadasY from planta where idUsuario = {$idUsuario}";
		$resultadoBruto = mysql_query($buscaPlantaUsuario);
		$dados = mysql_fetch_assoc($resultadoBruto);
		$planta = new Planta();

		$planta->setIdPlanta($dados['idPlanta']);
		$planta->setDescricao($dados['descricao']);
		$planta->setQtdCoordenadasX($dados['qtdCoordenadasX']);
		$planta->setQtdCoordenadasY($dados['qtdCoordenadasY']);

		//buscando as coordenadas dessa planta:

		$buscandoCoordenadasPlanta = "select coordenadaX, coordenadaY from coordenadas where idPlanta = {$planta->getIdPlanta()}";
		$resultadoBruto = mysql_query($buscandoCoordenadasPlanta);
		
		$coordenadasAux = array();

		while ($row = mysql_fetch_assoc($resultadoBruto)) {
			$coordenada = new Coordenada();	
			$coordenada->setCoordenadaX($row['coordenadaX']);
			$coordenada->setCoordenadaY($row['coordenadaY']);
			$coordenadasAux[] = $coordenada;	
		}

		$planta->setCoordenadas($coordenadasAux);
		return $planta;
	}


    public function getCoordenadas(){
        return $this->coordenadas;
    }


    public function setCoordenadas($coordenadas) {
        $this->coordenadas = $coordenadas;
    }


    public function getIdPlanta(){
        return $this->idPlanta;
    }

    public function setIdPlanta($idPlanta) {
        $this->idPlanta = $idPlanta;
    }

    public function getAreaTotal(){
        return $this->areaTotal;
    }

    public function setAreaTotal($areaTotal){
        $this->areaTotal = $areaTotal;
    }


    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }


    public function getQtdCoordenadasX(){
    	return $this->qtdCoordenadasX;
    }
    
    public function getQtdCoordenadasY(){
    	return $this->qtdCoordenadasY;
    }

    public function setQtdCoordenadasX($coordenadaX){
    	$this->qtdCoordenadasX = $coordenadaX;
    }

    public function setQtdCoordenadasY($coordenadaY){
    	$this->qtdCoordenadasY = $coordenadaY;
    }



}
?>