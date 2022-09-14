<?php
try{
    $pdo = new PDO("pgsql:dbname=ad;host=localhost user=postgres password=admin port=5432");
}

catch (PDOException $e){
    echo "erro com banco de dados".$e->getMessage();
}
catch (Exception $e){
    echo "erro muito doido".$e->getMessage();
}
?>