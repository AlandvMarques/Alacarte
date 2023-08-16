<?php
if(isset($_POST['email'])){
    include('conexao.php');
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

    
    
    
    $mysqli -> query("INSERT INTO senha(email, senha)VALUES('$email', '$senha')");
  }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta Alacarte</title>
    <link rel="stylesheet" href="css/criar_conta.css">
</head>
<body>
    <header>
        <div id="cabecalho">
            <div id="icone_cabecalho">
                <img src="imagens/chapeu-de-chef2.png" alt="logo da página">
            </div>
        </div>
    </header>
    <main>
        <div id="background_img">
            <img src="imagens/ORFF0J0.jpg" alt="imagem de fundo">
        </div>
        <div id="criar">
            <div id="conteudo_criar">
                <h1>Criar conta</h1>
                <!--Coloquei o metodo POST para fazer a validação-->
                <form action="" method="post">
                    <div id="inputs_criar">
                        <!--Coloquei o ("name="email")-->
                        <input type="email" class="input" placeholder="Email" id="input_email" name="email">
                        <!--Coloquei o ("name="senha")-->
                        <input type="password" class="input" placeholder="Senha" id="input_senha" name="senha">
                    </div>
                    <div id="input_enviar">
                        <input type="submit" id="ipt_enviar" value="Criar conta">
                    </div>
                </form>
            </div>
            <div id="continuar_criar">
                <button class="botao_criar" id="cont_facebook" type="button">
                    <div class="cont_btn">
                        <img src="imagens/facebook.png" alt="ícone do facebook">
                        <a href="">Continuar no Facebook</a>
                    </div>
                </button>
                <button class="botao_login" id="cont_google" type="button">
                    <div class="cont_btn">
                        <img src="imagens/google.png" alt="ícone do google">
                        <a href="">Continuar no Google</a>
                    </div>
                </button>
            </div>
        </div>
    </main>
    <footer>
        <div id="login_conta"><h3>Já tem conta?</h3><h3 id="redirecionar" onclick="fazer_login()"> Faça login.</h3>
        </div>
    </footer>

    <script type="text/javascript" src="js/redirecionamento_login.js"></script>
</body>
</html>