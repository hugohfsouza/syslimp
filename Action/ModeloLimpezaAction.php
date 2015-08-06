<?php
include('../lib/php/util.php');
$action = $_REQUEST['action'];



$modeloLimpezaController = new ModeloLimpezaController();

switch ($action) {
	case 'novoModelo':
		$modeloLimpezaController->novoModelo();
		break;
	case 'recuperarModelo':
		# code...
		break;
	case 'salvarModelo':

		session_start();
		
		$planta			 = $_SESSION['plantaEscolhida'];	
		$descricaoModelo = $_REQUEST['descricaoModelo'];
		$agentesModelo 	 = $_REQUEST['agentesModelos'];
		$dataLimpeza 	 = $_REQUEST['dataHoraLimpeza'];
		$coordenadas 	 = $_REQUEST['coordenadasEscolhidas'];
														
		$modeloLimpezaController->salvarModelo($coordenadas, $descricaoModelo, $agentesModelo, $dataLimpeza, $planta);
		break;
	case 'listarModelos':
		# code...
		break;
	case 'alterarModelos':
		# code...
		break;
	
	default:
		# code...
		break;
}


?>