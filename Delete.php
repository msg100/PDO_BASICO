<?php

/*
 * Deletando Registros
 * 
 */

require_once 'Conn.php';
$id = $_GET['id'];

$exclui = $conecta->prepare("DELETE FROM autor WHERE id=:id");
$exclui->bindParam(':id', $id);
$exclui->execute();




