<?php 

class UsuarioController{
	
	private $usuario;

	function __construct()
	{
		$this->usuario = new Usuario();
	}

	public function getNome(){

	}

	public function efetuarLogin($login, $password){
		$usuarioLogando = new Usuario();
		$usuarioLogando->setLogin($login);
		$usuarioLogando->setPassword($password);

		$logado = $this->usuario->efetuarLogin($usuarioLogando);

		if($logado){
			include('../View/principal.php');
		}else{
			include('../View/telaLogin.php');

		}
			
	}

	public function sair(){

	}

	public function recuperarCodigo(){

	}

	public function efetuarCadastro($nomeCompleto, $login, $password){
		$novoUsuario = new Usuario();
		$novoUsuario->setNome($nomeCompleto);
		$novoUsuario->setLogin($login);
		$novoUsuario->setPassword($password);
		exit;
		$resultado = $novoUsuario->efetuarCadastro($novoUsuario);

		if($resultado){
			//$this->efetuarLogin($novoUsuario);
		}
	}

}
 ?>