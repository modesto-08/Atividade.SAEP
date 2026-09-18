<?php

include "../conexao.php";


$id = $_GET['id'];


$sql = "DELETE FROM candidato WHERE id_candidato=$id";


mysqli_query($conexao,$sql);



header("Location:listar.php");


?>