<?php
include("superior.php");
?>

<?php
include("menuPrincipal.php");
?>


<div class="container">

	<div>
		<div class="col-xs-10">
			<h1>Modelos de Limpeza<small> listagem</small></h1>	
			<form method="POST" action="../Action/modeloLimpezaAction.php">
				<input type="hidden" name="action" id="action" value="novoModelo" >
				<input class="btn corAzul escritaBotao" type="submit" value="Novo Modelo">
			</form>
		</div>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>Descricao</th>
				<th>Tempo estimado</th>
				<th></th>
			</tr>
		</thead>
		<tbody>


			<tr>
				<th scope="row">1</th>
				<td>Limpeza do final de semana</td>
				<td>00h10</td>
				<td class="pull-right">
					<button class="btn  corAzul escritaBotao escritaBotao" onclick="window.location='modeloUnico.php'">Editar <a style="color:#ffffff" class="glyphicon glyphicon-cog"></a></button>	
					<button class="btn corAzul escritaBotao" onclick="window.location='execucaoModelo.php'">Iniciar <a style="color:#ffffff" class="glyphicon glyphicon-play"></a></button>
				</td>
			</tr>
		</tbody>
	</table>

</div>
<?php
include("inferior.php");
?>