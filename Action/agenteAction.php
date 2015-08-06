<?php

include('../lib/php/util.php');


$action = $_REQUEST['action'];

$agenteController = new AgenteController();



switch ($action) {
	case 'novoAgente':
		$agenteController->novoAgente();
	break;
	
	case 'salvarAgente':
		$agenteController->salvarAgente($_REQUEST['idAgente'], $_REQUEST['descricaoAgente'], $_REQUEST['codigoAgente']);
	break;

	case 'recuperarAgente':
		$idAgente = $_REQUEST['idAgente'];
		$agenteEscolhido = $agenteController->recuperarAgente($idAgente);

	break;

	case 'excluirAgente':
		# code...
	break;

	case 'listarAgentes':
		# code...
	break;
	
	default:
		$agenteController->listarAgentes();
	break;
}

?>





