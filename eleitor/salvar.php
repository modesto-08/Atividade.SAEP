<?php

error_reporting(E_ALL);
ini_set('display_errors',1);


include "../conexao.php";


$nome = $_POST['nome'];
$titulo = $_POST['numero_titulo'];
$cidade = $_POST['cidade'];



$sql = "INSERT INTO eleitor

(nome, numero_titulo, cidade)

VALUES

('$nome','$titulo','$cidade')";



if(mysqli_query($conexao,$sql)){


echo "

<script>

alert('Eleitor cadastrado com sucesso!');

window.location='listar.php';

</script>

";


}else{


echo "Erro: ".mysqli_error($conexao);


}


?>