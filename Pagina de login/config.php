<?php

    $Host = 'localhost';
    $Username = 'postgres';
    $Password = 'Andromeda#8352';
    $port = '5432';
    $dbnome = 'Login AD Promotora';

   $conexao = pg_connect("host=localhost port=5432 dbname=Login AD Promotora user=postgres password=Andromeda#8352");

   if ($conexao)
   {
    echo "connected";
   }

?>