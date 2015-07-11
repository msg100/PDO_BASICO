<?php

/* 
 * Criando conexão com MySQL
 * 
 * 
 */
try{
$conecta = NEW PDO("mysql:host=127.0.0.1; dbname=pdo", root, root);
}catch(PDOException $e){
    
    if(!$conecta):
        echo $e->getMessage();
    else:
        echo "Sucesso !!!";
    endif;
}