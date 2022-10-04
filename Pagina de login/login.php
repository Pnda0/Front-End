<?php

    if(isset($_POST['submit']))
    {
        print_r($_POST['usuario']);
        print_r($_POST['senha']);
    }






?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="https://www.adpromotora.com.br/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/Pagina de login/login.css">
</head>
<title> Automação AD </title>

<body>
    <!-- main login -->
    <div class="conteiner">
    <!-- left-login-->
         <!-- right-login-->
         <form action="login.php" method="post">
        <div class="conteiner-1">
            <!-- card-login-->
            <div class="card-login"> 
                <img  class="imagem" src="Imagens/foto1.png" alt="Ligação de tarefas" width="100%">
                <!-- text-field -->
            <div class="campo-de-texto">
                    <input type="text" pattern="[a-z]*" name="usuario" placeholder="Usuário" required>
            </div>
            <div class="campo-de-texto">
                    <input type="password" name="senha" placeholder="Senha" required>
            </div>
            <a target="_self" class="btn botao-1" type="submit" name="submit" id="submit">Entrar </a>
            <p class="rodape"> Conteúdo exclusivo para Colaboradores da AD Promotora.
                    Para maiores informações consulte o T.I da AD.
            </p>
        </form>
             </div>
            </div>
                
    </div>
    <p class="footer">2022 © AD Promotora ® Todos os direitos reservados.</p>
    </div>
    
</body>
</html>