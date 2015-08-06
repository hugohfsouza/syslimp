<?php
include("superior.php");
?>

<?php
include("menuPrincipal.php");
?>


<div class="container">

	<div>
		<div class="col-xs-10">
			<h1>Agentes<small> CRUD</small></h1>	
			<form method="POST" action="../Action/agenteAction.php">
				<input type="hidden" name="action" id="action" value="novoAgente" >
				<input class="btn corAzul escritaBotao" type="submit" value="Novo Agente">
			</form>
		</div>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>Descricao</th>
				<th>Código</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listaDeAgentes as $row): ?>
				<tr>
					<td><?=$row->getIdAgente()?></td>
					<td><?=$row->getDescricao()?></td>
					<td><?=$row->getCodigoAgente()?></td>
					<td>
						<div class="pull-right">
							<button class="btn  corAzul escritaBotao escritaBotao" onclick="location.href='../Action/agenteAction.php?action=recuperarAgente&idAgente=<?=$row->getIdAgente()?>'">Editar<a style="color:#ffffff" class="glyphicon glyphicon-cog"></a></button>	
							<button class="btn  corAzul escritaBotao escritaBotao" onclick="location.href='../Action/agenteAction.php?action=excluirAgente&idAgente=<?=$row->getIdAgente()?>'">Desativar<a style="color:#ffffff" class="glyphicon glyphicon-cog"></a></button>	

						</div>
					</td>
				</tr>
			<?php endforeach ?>




				

			
		</tbody>
	</table>

</div>
<?php
include("inferior.php");
?>