<?php

    if(isse($_POST['submit']))

    {
        include_once('config.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario,senha) VALUES ('$usuario','$senha')")
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tela_login.css">
    <title>Bem-vindo ao My Pet Finder</title>
</head>
<body>
    <header class="header">

        <a href="index.html" class="logo"> <span><img src="img/Sem título-1.png" height="50px" width="255px"></span></a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="tela_cadastro.html"><button class="btn btn-success">Cadastre-se</button></a>
        </nav>
    
    </header>

    <!-- Container principal (engloba toda a tela) -->
    <div class="main-login">
        
        <!-- Container da esquerda (engloba título e logo) -->
        <div class="left-login">
            <img src="img/Sem título-1.png" class="img-login" alt="logo">
            <p class="frase">Encontrar seu pet nunca foi tão fácil</p>
        </div>

       <!-- Container da direita (engloba formulário de login) -->
        <div class="right-login">

            <form action="tela_login.php" method="POST">
                <!-- Container 'Card login' (engloba todo formulário que está dentro da 'right-login') -->
                <div class="card-login">
                    <h1>FAÇA O LOGIN</h1>

                    <!-- 'textfiel' é responsável por deixar a label em cima do input -->
                    <div class="textfield">
                        <label for="usuario">Email</label>
                        <input type="text" name="usuario" id="#" placeholder="Digite seu email">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="#" placeholder="Digite sua senha">
                    </div>
                    
                    <button class="btn-login">Login</button>
                    <button class="btn-cadastro"><a  href="tela_cadastro.html">Cadastre</a></button>

                </div>
            </form>
        </div>

    </div>

</body>
</html>