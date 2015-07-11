<?php

/* 
 * Select foreach
 */

require_once 'Conn.php';

$nome = 'PAULO';
$busca=$conecta->prepare("SELECT *FROM autor WHERE nome=:nome");
$busca->bindParam(':nome' , $nome, PDO::PARAM_STR);
$busca->execute();

$linha= $busca->fetchAll(PDO::FETCH_ASSOC);

foreach($linha as $resultado){
    echo " ID - " . $resultado['id'] . " Nome : " . $resultado['nome'] . "  email - " .  $resultado['email'] ."<br>";
    
  // ID - 4 Nome : PAULO email - teste4@teste.com
    
}
