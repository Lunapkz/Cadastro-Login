<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" lang="pt-br">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Clientes</title>
</head>

<body>
<?php
//recuperação de dados 

$nome = $_GET["username"];
$senha = $_GET["password"];

//processamento
include_once("conexaobd.php");

$sql = "INSERT INTO CLIENTE (NOME,SENHA) VALUES ('$nome','$senha');";
mysqli_query($connection,$sql) or die ("Erro ao acessar o Banco de Dados");

    //saida

    echo "<br>Cliente cadastrado com sucesso!<br><br>";
    echo "<strong>Nome do cliente:</strong> $nome<br>";
    echo "<strong>Senha do cliente:</strong> $senha<br>";

?>

</body>

</html>