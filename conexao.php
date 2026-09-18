<?php

$servidor = "localhost";
$usuario = "root";
$senha = "Senai@118";
$banco = "sistema_eleitoral2";


$conexao = mysqli_connect(
    $servidor,
    $usuario,
    $senha,
    $banco
);


if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

?>