<?php

/*
 * Insert com validação.
 * 
 */

require_once 'Conn.php';
$email = $_GET['email'];

$inclui = $conecta->prepare("INSERT INTO autor(email) VALUES (:email)");
$inclui->bindParam(':email', $email);

// Validação
$valida = $conecta->prepare("SELECT *FROM autor WHERE email=?");
$valida->execute(array($email));
if ($valida->rowCount() != 0):
    echo "email ja existe !!!";
else:
    $inclui->execute();
endif;


