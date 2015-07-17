<?php 
$cpf = "123456";
$enviar = $_POST['enviar']; 
$despesa = $_POST['despesa']; 
$valor = $_POST['valor']; 

if($enviar == "enviar"){ 
require_once 'Conn.php';
$inclui=$conecta->prepare("INSERT INTO despesas(despesa, valor) VALUES (:despesa, :valor)");
$inclui->bindParam(':despesa', $despesa, PDO::PARAM_STR);
$inclui->bindParam(':valor', $valor, PDO::PARAM_STR);
$inclui->execute();
} 
?> 
<html> 
<head> 
<title></title> 
</head> 
<body> 
<form action="" method="post"> 
Despesa<br /> 
<input type="text" name="despesa" /><br /> 
Valor<br /> 
<input type="text" name="valor" /><br /><br /> 
<input type="submit" value="enviar"  name="enviar"/> 
</form> 
   
    CPF : <?=$cpf;?> <br>
<?php
$busca=$conecta->prepare("SELECT *FROM despesas");
$busca->execute();
$linha= $busca->fetchAll(PDO::FETCH_ASSOC);
foreach($linha as $resultado){
    echo " Despesa - " . $resultado['despesa'] . " - " . $resultado['valor']  ."<br>";

}
   


?>
</html>
