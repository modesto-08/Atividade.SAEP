<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

include "../conexao.php";


$id = $_GET['id'];


$sql = "SELECT * FROM eleitor WHERE id_eleitor=$id";


$resultado = mysqli_query($conexao,$sql);


$eleitor = mysqli_fetch_assoc($resultado);



?>


<!DOCTYPE html>
<html>

<head>

<title>Editar Eleitor</title>

<link rel="stylesheet" href="../css/estilo.css">

</head>


<body>


<h1>Editar Eleitor</h1>



<form method="POST">


<input type="text" 
name="nome"
value="<?php echo $eleitor['nome']; ?>">



<input type="number"
name="numero_titulo"
value="<?php echo $eleitor['numero_titulo']; ?>">



<input type="text"
name="cidade"
value="<?php echo $eleitor['cidade']; ?>">



<button name="editar">

Salvar alteração

</button>


</form>



<?php


if(isset($_POST['editar'])){


$nome = $_POST['nome'];

$titulo = $_POST['numero_titulo'];

$cidade = $_POST['cidade'];



$sql = "UPDATE eleitor SET

nome='$nome',

numero_titulo='$titulo',

cidade='$cidade'


WHERE id_eleitor=$id";




if(mysqli_query($conexao,$sql)){


echo "

<script>

alert('Eleitor alterado com sucesso!');

window.location='listar.php';

</script>


";


}


}



?>


</body>


</html>