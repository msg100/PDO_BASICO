<?php

/* 
 * VERIFICANDO DRIVER PDO DISPONÍVEL
 */


print_r(PDO::getAvailableDrivers());


// Array ( [0] => mysql [1] => sqlite [2] => pgsql )