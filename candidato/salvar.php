<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include "../conexao.php";


$nome = $_POST['nome'];
$numero = $_POST['numero_candidato'];
$cargo = $_POST['cargo'];
$partido = $_POST['partido_ficticio'];


$sql = "INSERT INTO candidato 
(nome, numero_candidato, cargo, partido_ficticio)

VALUES

('$nome', '$numero', '$cargo', '$partido')";


if(mysqli_query($conexao, $sql)){

    echo "
    <script>
    alert('Candidato cadastrado com sucesso!');
    window.location='listar.php';
    </script>
    ";

}else{

    echo "Erro ao cadastrar: " . mysqli_error($conexao);

}

?>