<?php

    if(isse($_POST['submit']))

    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $feminino = $_POST['feminino'];
        $masculino = $_POST['masculino'];
        $outros = $_POST['outros'];
        $data_nascimento = $_POST['data_nascimento'];
        $submit = $_POST['submit'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha,feminino,masculino,outros,data_nascimento,submit) VALUES ('$nome','$email','$senha','$feminino','$masculino','$outros','$data_nascimento','$submit')")
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tela_cadastro.css">
    <title>Cadastre-se aqui</title>
    <script src="tela_login.js"></script>
</head>
<body>
    <main>
        <header class="header">

            <a href="index.html" class="logo"> <span><img src="img/Sem título-1.png" height="50px" width="255px"></span></a>
        
            <div id="menu-btn" class="fas fa-bars"></div>
        
            <nav class="navbar">
                <a href="tela_login.html"><button class="btn btn-success">Login</button></a>
            </nav>
        
        </header>
        
        <div class="main-login">
            <form action="tela_cadastro.php" method = "POST">
                <fieldset>
                    <br>
                    <div class="infos">
                        <div class="input-box">
                            <label for="nome">Nome</label>
                            <input class="inputUser" type="text" name="nome" id="nome" placeholder="Nome" required>
                        </div>
                        <br><br>
                        <div class="input-box">
                            <label for="nome">Email</label>
                            <input class="inputUser" type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <br><br>
                        <div class="input-box">
                            <label for="senha">Senha</label>
                            <input class="inputUser" type="password" name="senha" id="senha" placeholder="Senha" required>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="sexo">
                        <p>Sexo:</p>
                        <input type="radio" name="feminino" id="feminino" value="feminino">
                        <label for="feminino">Feminino</label>
                        <br><br>
                        <input type="radio" name="masculino" id="masculino" value="masculino">
                        <label for="masculino">Masculino</label>
                        <br><br>
                        <input class="botao" type="radio" name="outros" id="outros" value="outros">
                        <label for="outros">Outros</label>
                    </div>
                    <br><br>
                    <div class="input-box">
                        <label for="data_nascimento"><b>Data de Nascimento</b></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" class="ata_nascimento" required>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </main>

</body>
</html>