<?php

    if(isse($_POST['submit']))

    {
        include_once('config.php');

        $nome_pet = $_POST['nome_pet'];
        $seu_nome = $_POST['seu_nome'];
        $femea = $_POST['femea'];
        $macho = $_POST['macho'];
        $enviar = $_POST['enviar'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome_pet,seu_nome,femea,macho,enviar) VALUES ('$nome_pet','$seu_nome','$femea','$macho','$enviar')")
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tela_cadastro_pets.css">
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
            <form action="">
                <fieldset>
                    <br>
                    <div class="infos">
                        <div class="input-box">
                            <label for="nome_pet">Nome do seu Pet</label>
                            <input class="inputUser" type="text" name="nome_pet" id="nome_pet" placeholder="Nome do seu Pet" required>
                        </div>
                        <br><br>
                        <div class="input-box">
                            <label for="nome">Seu nome</label>
                            <input class="inputUser" type="text" name="seu_nome" id="seu_nome" placeholder="Seu nome" required>
                        </div>
                        <br>
                        <div class="sexo">
                            <p>Sexo:</p>
                            <input type="radio" name="femea" id="femea" value="femea">
                            <label for="femea">Fêmea</label>
                            <br><br>
                            <input type="radio" name="macho" id="macho" value="macho">
                            <label for="macho">Macho</label>
                            <br><br>
                        </div>
                        <br><br>
                        <input type="submit" name="enviar" id="enviar" value="Enviar">
                    </div>
                </fieldset>
            </form>
        </div>
    </main>

</body>
</html>