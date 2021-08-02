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
$cpfPre = $_POST["cpf"];
$cpfPos = str_replace(".", "", $cpfPre);
$cpf = str_replace("-", "", $cpfPos);

$curso = $_POST["gender"];
echo $curso . "<br>";
$endereço = $_POST["endereço"];
$cepPre = $_POST["cep"];
$cep = str_replace("-", "", $cepPre);


$telefonePre = $_POST["telefone"];
$telefonePos = str_replace("(", "", $telefonePre);
echo $telefonePos;
$telefonePos = str_replace(")", "", $telefonePos);
echo $telefonePos;
$telefonePos = str_replace(" ", "", $telefonePos);
$telefone = str_replace("-", "", $telefonePos);
echo $telefone;

$senha = $_POST["senha"];
$postsenha = base64_encode("$senha");

require('connect.php');

mysqli_select_db($conn, "sis_academico");

$sql = " INSERT INTO alunos
(id, nome, cpf, curso, endereço, cep, telefone, senha)
VALUES ('0', '$nome', '$cpf', '$curso', '$endereço', '$cep', '$telefone', '$postsenha' ) ";

if (mysqli_query($conn ,$sql)) {
    echo "New record created";
} else {
    echo "Error". $sql. "<br>".mysqli_error($conn);
}

mysqli_close($conn)

?>
</body>
</html>