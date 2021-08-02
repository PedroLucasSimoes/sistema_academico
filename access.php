<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
<div class="header">
        <ul>
            <li><a href="index.html">Home</a> </li>
            <li><a class="active" href="access.php">Alunos</a></li>
            <li><a href="register_index.html">Registre-se</a></li>
            <li><a href="login_index.html">Login</a></li>
            <li style="float:right"><a href="#sobre">Sobre</a></li>
        </ul>
    </div>

<div class=center>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>CEP</th>
        <th>Telefone</th>
    </tr>
    <?php

    require('connect.php');
    mysqli_select_db($conn, "sis_academico");
    $sql = "SELECT * FROM alunos ORDER BY id";

    $result = $conn -> query($sql);


    if ($result -> num_rows > 0) {
        while($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["id"]. "</td><td>". $row["nome"]. "</td><td>" .$row["cpf"]. "</td><td>".$row["endereço"]. "</td><td>".$row["cep"]. "</td><td>".$row["telefone"]."</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    $conn-> close();

    /*while($array = mysqli_fetch_array($alunos))
    {
        echo $array['id'] . " = ".
        " Aluno: " . $array['nome'].
        " CPF: ".$array['cpf'].
        " Endereço: ".$array['endereço'].
        " CEP: ".$array['cep'].
        " Telefone: ".$array['telefone'].
        " Senha: ".$array['senha']. "<br>";
    } */

    ?>



</table>
</div>

</body>
</html>