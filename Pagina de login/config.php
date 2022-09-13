<?php

    $Host = 'localhost';
    $Username = 'postgres';
    $Password = 'Andromeda#8352';
    $port = '5432';
    $dbnome = 'Login AD Promotora';

   $conexao = pg_connect("host=localhost port=5432 dbname=Login AD Promotora user=postgres password=dark_souls");

   if ($conexao)
   {
    echo "connected";
   }

?>