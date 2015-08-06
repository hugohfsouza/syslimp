<?php 
include('conexao.php');

class Usuario{
	private $codigo;
	private $nome;
	private $login;
	private $password;


	
	function __construct()
	{
	}


	public function efetuarLogin($usuario){
       $buscaUsuario = "SELECT idUsuario, nome, password from usuario where login = '{$usuario->getLogin()}'";            
       $resultadoBruto = mysql_query($buscaUsuario);        
       $dados = mysql_fetch_assoc($resultadoBruto);
       $usuario->setNome($dados['nome']);
       $usuario->setCodigo($dados['idUsuario']);
    

       if( strtoupper(md5($usuario->getPassword())) == $dados['password'] ){
            setcookie('usuario',$usuario->getLogin(), (time() + (3 * 24 * 3600)));
            setcookie('password',$usuario->getPassword(), (time() + (3 * 24 * 3600)));
            setcookie('nomeCompletOo',$usuario->getNome(), (time() + (3 * 24 * 3600)));                
            setcookie('idUsuario',$usuario->getCodigo(), (time() + (3 * 24 * 3600)));                
            return true;
       }else{
        return false;
       }

    }
           

	public function sair(){

	}

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo)  {
        $this->codigo = $codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    private function getPassword() {
        return $this->password;
    }


    public function setPassword($password){
        $this->password = $password;
    }

    public function efetuarCadastro($usuario){
        $insertUsuario = "INSERT INTO syslimp.usuario
                                    (Nome,
                                    login,
                                    password)
                                    VALUES
                                    ('{$this->getNome()}',
                                    '{$this->getLogin()}',
                                    '".md5($this->getPassword())."');
                                    ";
        $resultado =  mysql_query($insertUsuario);        
        unset($insertUsuario);
        return $resultado;    
    }
}
        




 ?>