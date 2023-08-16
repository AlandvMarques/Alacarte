<?php
if(isset($_POST['email'])) {

  include("conexao.php");
  
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql_code = "SELECT * FROM senha WHERE email = '$email' LIMIT 1";
  $sql_exec = $mysqli->query($sql_code) or die($mysqli ->error);

  $usuario = $sql_exec -> fetch_assoc();
  if(password_verify($senha, $usuario['senha'])){
    header ("location:index.php");
  }else{
    echo "falha ao logar! senha ou e-mail incorretos";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alacarte</title>
    <link rel="stylesheet" href="css/tela_login.css">
</head>
<body>
    <header>
        <div id="cabecalho">
            <div id="icone_cabecalho">
                <img src="imagens/chapeu-de-chef.png" alt="logo da página">
            </div>
        </div>
    </header>
    <main>
        <div id="background_img">
            <img src="imagens/ORFF0J0.jpg" alt="imagem de fundo">
        </div>
        <div id="login">
            <div id="conteudo_login">
                <h1>Login</h1>
                <!--Coloquei o metodo POST para fazer a validação-->
                <form action="" method="post">
                    <div id="inputs_login">
                        <!--Coloquei o ("name="email")-->
                        <input type="email" class="input" placeholder="Email" id="input_email" name="email">
                        <!--Coloquei o ("name="senha")-->
                        <input type="password" class="input" placeholder="Senha" id="input_senha" name="senha">
                    </div>
                    <div id="input_enviar">
                        <input type="submit" id="ipt_enviar" value="Login">
                    </div>
                </form>
                <div id="esquecer_senha">
                    <a href="">Esqueci a Senha</a>
                </div>
            </div>
            <div id="continuar_login">
                <button class="botao_login" id="cont_facebook" type="button">
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
        <div id="criar_conta"><h3>Ainda não tem conta?</h3><h3 id="redirecionar" onclick="open_criar_conta()"> Crie a sua.</h3>
        </div>
    </footer>

    <script type="text/javascript" src="js/redirecionamento_criar.js"></script>
</body>
</html>