<?php
	
	require 'conexao.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM receita WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css">	
	</head>
	<header>
        <div id="cabecalho">
            <div id="icone_cabecalho">
                <img src="imagens/chapeu-de-chef.png" alt="logo da página">
            </div>
        </div>
    </header>
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>APAGADO</h3>
				<?php } else { ?>
				<h3>ERRO AO APAGAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">Voltar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>