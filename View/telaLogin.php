<?php
include('superior.php');
?>
<body>
	<style type="text/css">	
		body{
			background-color: #e8e8e8;
		}

		.middlePrincipal{
			background-color: #ffffff;
			padding-left: 2%;
			padding-right: 2%;
			padding-bottom: 10%;
			padding-top: 3%;
			margin-top: 20%;
		}

		.arredondarBordas{
			-moz-border-radius: 5px; /* Para Firefox */
			-webkit-border-radius: 5px; /*Para Safari e Chrome */
			border-radius: 5px; /* Para Opera 10.5+*/
		}

		.middlePrincipal h1{
			text-align: center;
		}
	</style>

	<div class="container">
		<!-- Efetuar login -->
		<div class="col-xs-6 col-xs-offset-3" id="formularioLogin"> 
			<div class="middlePrincipal arredondarBordas">
			<h1>SysLimp<small> Login</small></h1>
				<form method="POST" action="../Action/usuarioAction.php" method="POST" >
				<input value="efetuarLogin" id="actionLogin" name="action" type="hidden">
					<div class="form-group">
						<div class="form-group">
							<label for="login">Login</label>
							<input type="login" class="form-control" id="login" name="login" placeholder="Digite seu login">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
						<div>
						</div>
						<div class="form-group">
							<div  class="col-md-6">
								<input type="button" onclick="efetuarCadastro();" class="btn btn-info col-xs-12" value="Cadastrar" />
							</div>
							<div  class="col-md-6">
								<input type="submit" class="btn btn-success col-xs-12" />
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>




		<!-- Efetuar Cadastro -->
		<div class="col-xs-6 col-xs-offset-3" id="formularioCadastro">
			<div class="middlePrincipal arredondarBordas">
			<h1>SysLimp<small> Cadastro</small></h1>
				<form method="POST" action="../Action/usuarioAction.php" method="POST">
				<input value="efetuarCadastro" id="action" name="action" type="hidden">
					<div class="form-group">
						<div class="form-group">
							<label for="nomeCompleto">Nome Completo</label>
							<input type="nomeCompleto" class="form-control" id="nomeCompleto" name="nomeCompleto" placeholder="Digite seu nome">
						</div>
						<div class="form-group">
							<label for="login">Login</label>
							<input type="login" class="form-control" id="loginCadastro" name="login" placeholder="Digite seu login" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="passwordCadastro" name="password" placeholder="Password" autocomplete="off">
						</div>
						<div>
						</div>
						<div class="form-group">
							<div  class="col-md-6">
								<input type="button" onclick="efetuarLogin();" class="btn btn-info col-xs-12" value="Efetuar Login" />
							</div>
							<div  class="col-md-6">
								<input type="submit" class="btn btn-success col-xs-12" value="Cadastrar" />
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>



	<script type="text/javascript">
		$('#formularioCadastro').css('display','none');
		$('#formularioLogin').css('display','');

		function efetuarLogin(){
				$('#formularioCadastro').css('display','none');
				$('#formularioLogin').css('display','');

		}

		function efetuarCadastro(){
				$('#formularioLogin').css('display','none');
				$('#formularioCadastro').css('display','');
				$('#loginCadastro').val('');
				$('#passwordCadastro').val('');
		}

	</script>

</body>
</html>