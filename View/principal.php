<?php
include("superior.php");
?>
<?php
include("menuPrincipal.php");
?>

<div class="container">
	<h1 class="tituloPrincipal">SysLimp</h1>
	<hr>
	<form method="POST" action="../Controller/ModeloController.php">
		<input type="hidden" name="action" id="action" value="">
		<button type="submit" class="btn btn-info btn-lg btn-block corAzul">Iniciar Limpeza</button>
	</form>
</div>


<?php
include("inferior.php");
?>