<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'personal');
	
	if($mysqli->connect_error){
		
		die('Erro de conexão' . $mysqli->connect_error);
		
	}
?>