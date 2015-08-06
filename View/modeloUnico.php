	<?php
	include("superior.php");
	?>

	<?php
	include("menuPrincipal.php");
			session_start();
			$_SESSION['plantaEscolhida']= $novoModeloLimpeza->getPlanta();
	?>


	<div class="container">
		<h1>Modelo de Limpeza<small> Novo</small></h1>
		<!-- <h1>Modelo de Limpeza<small> Editar</small></h1> -->
		<hr>

		<div class="row">		
			<div  class="plantaAmbiente" id="plantaAmbiente">

				<table border="1" >
					<?php

					for ($eixoY=0; $eixoY < $novoModeloLimpeza->getPlanta()->getQtdCoordenadasY() ; $eixoY++) { 
						echo "<tr>";
						for ($eixoX=0; $eixoX < $novoModeloLimpeza->getPlanta()->getQtdCoordenadasX(); $eixoX++) { 
							$id = $eixoX.$eixoY;
							?>
							<td onclick="pintar(this,'<?=$eixoX?>','<?=$eixoY?>');" id='<?=$id?>' width='50' height='50'><?=$id?></td>
							<?php
						}
						echo "</tr>";
					}				
					?>
				</table>
			</div>
		</div>






		<hr>
		<div class="row">
			<div id="dados">
				<form class="form-horizontal" action="../Action/ModeloLimpezaAction.php" method="POST">
					<input type="hidden" name="action" id="action" value="salvarModelo">

					<div class="form-group">
						<label for="areaTotal" class="col-md-2 control-label">DescriÁ„o</label>
						<div class="col-md-8">
							<textarea class="form-control" id="descricaoModelo" name="descricaoModelo" ><?=$novoModeloLimpeza->getDescricao()?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="areaTotal" class="col-md-2 control-label">¡Årea a ser limpa</label>
						<div class="col-md-3">
							<input type="number" class="form-control" name="areaTotal" id="areaTotal" disabled value="0" >
						</div>
						<label for="tempoEstimado" class="col-md-2 control-label">Tempo estimado</label>
						<div class="col-md-3">
							<input type="text" class="form-control" id="tempoEstimado" name="tempoEstimado" disabled="disabled" value="<?=$novoModeloLimpeza->getTempoEstimado()?>">
						</div>
					</div>
					<div class="form-group">
						<label for="agentesLimpadores" class="col-md-2 control-label">Agentes</label>
						<div class="col-md-3">

							<select multiple id="agentesModelos" name="agentesModelos[]"  class="form-control">
								<?php
								foreach ($novoModeloLimpeza->getAgentes() as $agente) {
									echo "<option value='".$agente->getIdAgente()."' data-tempoLimpeza='".$agente->getTempoLimpeza()."'>".$agente->getDescricao()."</option>";
								}
								?>
							</select>
						</div>

						<label for="dataHoraLimpeza" class="col-md-2 control-label">Data/Hora</label>
						<div class="col-md-3">
							<input type="text" class="form-control" name="dataHoraLimpeza" id="dataHoraLimpeza" value="<?=$novoModeloLimpeza->getDataProgramado()?>">
						</div>
					</div>	
					<select multiple id="coordenadasEscolhidas" name="coordenadasEscolhidas[]" style="display:none" >
					</select>

					<div class="form-group">
						<div class="col-md-3 pull-right">
							<input type="submit" class="btn  btn-success"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('#dataHoraLimpeza').datetimepicker();


		function pintar(item,eixoX, eixoY){

			var identificadorUnico = eixoX+""+eixoY;
			var identificadorCoordenada = eixoX+"+"+eixoY;
			var option  = new Option('coordenada'+identificadorUnico, identificadorCoordenada, true, true);

			if($(item).attr('comcor') == '1'){
				//j· existe no array
				$(item).css({
					backgroundColor: '#ffffff'
				});
				$(item).attr({
					comCor: '0'
				});

				$("#coordenadasEscolhidas option[value='"+identificadorCoordenada+"']").remove();
				subtraiArea();		
			}else{
				//n„o existe no array
				$(item).css({
					backgroundColor: '#c6c6c6'
				});
				$(item).attr({
					comCor: '1'
				});

				
				$('#coordenadasEscolhidas').append(option);
				somaArea();

			}
		}

		function somaArea(){
			var num = parseInt($('#areaTotal').val(), 10);
			num++;
			$('#areaTotal').val(num);
		}

		function subtraiArea(){
			var num = parseInt($('#areaTotal').val(), 10);
			num--;
			$('#areaTotal').val(num);
		}

	</script>


	<?php
	include("inferior.php");
	?>