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

$connection = mysqli_connect("localhost", "root", "123");
if (!$connection) {
die("Não foi possível conectar ao banco de dados.
        Erro detectado:" . mysqli_error());
}

?>
</body>
</html>