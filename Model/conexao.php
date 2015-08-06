<?php

$host 		= "localhost";
$dbname 	= "syslimp";
$usuario 	= "root";
$senha 		= "";

$resultado = @mysql_connect($host, $usuario, $senha);
@mysql_select_db($dbname);	



?>