<?php

    //print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && ($_POST['senha']))
    {
        //Acessa
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //print_r(('Email:' . $usuario));
        //print_r('<br>');
        //print_r(('Senha:' . $senha));

        $sql = "SELECT * FROM tb_usuario WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            print_r('Não existe');
        }
        else
        {
            print_r('Existe');
        }
    }
    else
    {
        //Não acessa
        header('Location:login.php');
    }

?>