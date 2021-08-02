<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereço = $_POST["endereço"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];

$senha = $_POST["senha"];
echo $senha;
$postsenha = base64_encode("$senha");
echo $senha;

require('connect.php');

mysqli_select_db($conn, "sis_academico");

$sql = " INSERT INTO alunos
(id, nome, cpf, endereço, cep, telefone, senha)
VALUES ('0', '$nome', '$cpf', '$endereço', '$cep', '$telefone', '$postsenha' ) ";

if (mysqli_query($conn ,$sql)) {
    echo "New record created";
} else {
    echo "Error". $sql. "<br>".mysqli_error($conn);
}

mysqli_close($conn)

?>
</body>
</html>