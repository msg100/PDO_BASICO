<?php

/* 
 * Atualiza um arquivo
 */

require_once 'Conn.php';

$up = $conecta->prepare("UPDATE autor SET nome='SILVIO' WHERE nome='PAULO' ");
$up->execute();