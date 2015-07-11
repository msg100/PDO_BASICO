<?php

/* 
 * Executando um Select while
 *
 */

require_once 'Conn.php';

$busca=$conecta->prepare("SELECT *FROM autor");
$busca->execute();
while($linha=$busca->fetch(PDO::FETCH_ASSOC)){
echo "Nome:" . $linha["nome"] . "  email ->" . $linha["email"] . "<br>";
}