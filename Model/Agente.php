<?php
include('conexao.php');

class Agente{
	
	private $nivelBateria;
	private $status;
	private $descricao;
	private $idAgente;
	private $codigoAgente;
    private $tempoLimpeza;

	function __construct()
	{
	}

	public static function listarAgentes($idUsuario){
        $selectAgentes = "SELECT idAgente, descricao, codigoAgente from agente where status = 'A'";
        $resultadoBruto = mysql_query($selectAgentes);
        $arrayDeAgentes = array();

        while ($row = mysql_fetch_assoc($resultadoBruto)) {
            $agenteLista = new Agente();
            $agenteLista->setIdAgente($row['idAgente']);
            $agenteLista->setDescricao($row['descricao']);
            $agenteLista->setCodigoAgente($row['codigoAgente']);
            $arrayDeAgentes[] = $agenteLista;
        }
        return $arrayDeAgentes;
	}

	public function salvarAgente($agente){
        if($agente->getIdAgente()){
            $comandoBanco = "UPDATE syslimp.agente SET 
                                        descricao = '{$agente->getDescricao()}', 
                                        codigoAgente = {$agente->getCodigoAgente()}
                                        where idAgente = {$agente->getIdAgente()}";      
            
        }else{

            $comandoBanco = "INSERT INTO syslimp.agente
                                        (
                                        descricao,
                                        tempoLimpeza,
                                        status,
                                        nivelBateria,
                                        codigoAgente,
                                        idUsuario)
                                        VALUES
                                        ('{$agente->getDescricao()}',
                                        0,
                                        'A',
                                        0,
                                        {$agente->getCodigoAgente()},
                                        {$_COOKIE['idUsuario']})";
        }           
            
        return mysql_query($comandoBanco);         
            
	}

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setNivelBateria($nivelBateria){
        $this->nivelBateria = $nivelBateria;
    }

    public function setCodigoAgente($codigoAgente){
        $this->codigoAgente = $codigoAgente;
    }


    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setIdAgente($idAgente){
        $this->idAgente = $idAgente;
    }

    public function recuperarAgente($idAgente){
        $selectAgente = "SELECT idAgente, descricao, codigoAgente from agente where idAgente = {$idAgente}";            
        $resultadoBruto = mysql_query($selectAgente);
        $agenteEncontrado = new Agente();
        while ($row = mysql_fetch_assoc($resultadoBruto)) {
            $agenteEncontrado->setIdAgente($row['idAgente']);
            $agenteEncontrado->setDescricao($row['descricao']);
            $agenteEncontrado->setCodigoAgente($row['codigoAgente']);
        }
        return $agenteEncontrado;
    }

    public function recuperarDadosAgenteLimpeza($idModeloLimpeza=false, $idUsuario=false){
    	if($idModeloLimpeza){
            //vou usar isso quando for editar algum modelo
        }else if($idUsuario){
            $buscaInfoAgentes = "SELECT idAgente, descricao, tempoLimpeza from agente where idUsuario = {$idUsuario} AND status ='A'";
        }else{
            return false;
        }

           
        $resultadoBruto = mysql_query($buscaInfoAgentes);
        $agentes = array();
        while ($row = mysql_fetch_assoc($resultadoBruto)) {
            $agenteAux= new Agente();
            $agenteAux->setIdAgente($row['idAgente']);
            $agenteAux->setDescricao($row['descricao']);
            $agenteAux->setTempoLimpeza($row['tempoLimpeza']);
            $agentes[] = $agenteAux;   
        }
        return $agentes;
            
    }

    public function getNivelBateria(){
        return $this->nivelBateria;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getCodigoAgente(){
        return $this->codigoAgente;
    }

    public function getIdAgente(){
        return $this->idAgente;
    }


    public function getTempoLimpeza(){
        return $this->tempoLimpeza;
    }

    private function setTempoLimpeza($tempoLimpeza) {
        $this->tempoLimpeza = $tempoLimpeza;
    }
}
?>
