<?php

function __autoload($classe){
	$arrayDeLocais = array('Controller', 'Model');

	foreach ($arrayDeLocais as $pasta) {
		$caminhoPasta = "../".$pasta."/".$classe.".php";
			if(file_exists($caminhoPasta)){
				include($caminhoPasta);
			}
			
			
	}
}

?>