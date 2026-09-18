<?php


include "../conexao.php";


$id = $_GET['id'];



$sql = "DELETE FROM eleitor WHERE id_eleitor=$id";



mysqli_query($conexao,$sql);



header("Location:listar.php");



?>