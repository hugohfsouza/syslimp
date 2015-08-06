<?php
include("superior.php");
?>
<?php
include("menuPrincipal.php");
?>
<style type="text/css">
	#mostrarMapa{
		font-size: 16px;
	}

</style>

<div class="container">
	<h2>Modelo
		<small> Limpeza do final de semana2
		</small>

	</h2>
	<hr>
	<div class="row">		
		<div  class="plantaAmbiente" id="plantaAmbiente">

			<table border="1" >

				

				<?php
				
		$limiteX = 3;//$dadosPlanta['qtdCoordenadasX'];
		$limiteY = 3;//$dadosPlanta['qtdCoordenadasY'];
		

		for ($j=0; $j <$limiteY; $j++) { 
			echo "<tr>";
			for ($i=0; $i < $limiteX	; $i++) { 
				$id = $i.$j;
				?>
				<td onclick="pintar(this);adicionarCoordenadas('<?=$id?>');" id='<?=$id?>' width='50' height='50'><?=$i." ".$j?></td>
				<?php
			}
			echo "</tr>";
		}
		
		?>
	</table>
</div>
</div>
<div class="row">
	<div class="col-xs-9 telaDeLogs">
		<textarea class="form-control" rows="10%"></textarea>
	</div>
	<div class="col-xs-3 controlesModelos">
		<div class="row">
			<button  type="button" class="btn btn-primary">Pausar</button>
		</div>

		<div class="row">
			<button  type="button" class="btn btn-success">Continuar</button>
		</div>

		<div class="row">
			<button  type="button" class="btn btn-danger">Cancelar</button>
		</div>

	</div>
</div>
</div>
<?php
include("inferior.php");
?>