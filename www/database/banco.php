<?php

$servidor = "mysql-db";
$usuario = "root";
$senha = "veiculos";
$banco = "carros";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
