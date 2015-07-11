<?php

/* 
 * Insert sem Checagem de Registro existente
 */
require_once 'Conn.php';
$email = "teste6@testes.com";

$inclui=$conecta->prepare("INSERT INTO autor(email) VALUES (:email)");
$inclui->bindParam(':email', $email, PDO::PARAM_STR);
$inclui->execute();


