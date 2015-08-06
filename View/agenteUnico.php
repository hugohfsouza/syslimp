	<?php
	include("superior.php");
	?>
	<?php
	include("menuPrincipal.php");		
	?>
	<div class="container">
		<h2>Agente
			<!-- <small> Novo</small> -->
			<small> Editar</small>
		</h2>
		<hr>

		<form action="../Action/agenteAction.php" method="POST">
			<input value="salvarAgente" id="action" name="action" class="" type="hidden">
			<input value="<?=$agenteTela->getIdAgente()?>" id="idAgente" name="idAgente" class="" type="hidden">
			<div class="row">
				<div class="form-group col-xs-1">
					<label for="idAgente">Id</label>
					<input value="<?=$agenteTela->getIdAgente()?>" id="idAgente" name="idAgente" disabled class="form-control">
				</div>

				<div class="form-group col-xs-7">
					<label for="descricaoAgente">Descrição</label>
					<input value="<?=$agenteTela->getDescricao()?>" id="descricaoAgente" name="descricaoAgente"  class="form-control">
				</div>

				<div class="form-group col-xs-4">
					<label for="codigoAgente">Código Agente</label>
					<input value="<?=$agenteTela->getCodigoAgente()?>" id="codigoAgente" name="codigoAgente" class="form-control">
				</div>
			</div>

			<div class="row pull-right">
				<input value="Adicionar" class="btn btn-success" type="submit">
			</div>
		</form>

	</div>



	<?php
	include("inferior.php");
	?>