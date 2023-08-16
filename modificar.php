<?php
	require 'conexao.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM receita WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">EDITAR</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="nome" value="<?php echo $row['nome']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="ingredientes" class="col-sm-2 control-label">Ingredientes</label>
					<div class="col-sm-10">
						<input type="ingredientes" class="form-control" id="ingredientes" name="ingredientes" placeholder="Ingredientes" value="<?php echo $row['ingredientes']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="preparo" class="col-sm-2 control-label">Preparo</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="preparo" name="preparo" placeholder="Preparo" value="<?php echo $row['preparo']; ?>" >
					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Voltar</a>
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>