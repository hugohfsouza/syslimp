<?php 
$action = $_REQUEST['action'];
include('../lib/php/util.php');
$usuarioController = new UsuarioController();


switch ($action) {
	case 'novoUsuario':
		# code...
		break;
	case 'recuperarUsuario':
		# code...
		break;

	case 'alterarUsuario':
		# code...
		break;

	case 'excluirUsuario':
		# code...
		break;
		
	case 'efetuarLogin':
		$usuarioController->efetuarLogin($_REQUEST['login'], $_REQUEST['password']);
			
	break;

	case 'efetuarCadastro':
			$usuarioController->efetuarCadastro($_REQUEST['nomeCompleto'], $_REQUEST['login'], $_REQUEST['password']);
			
		break;

	default:
		# code...
		break;
}
 ?>