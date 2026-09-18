<?php

error_reporting(E_ALL);
ini_set('display_errors',1);


include "../conexao.php";


$id = $_GET['id'];


$sql = "SELECT * FROM candidato WHERE id_candidato=$id";


$resultado=mysqli_query($conexao,$sql);


$candidato=mysqli_fetch_assoc($resultado);



?>


<!DOCTYPE html>
<html>

<head>

<title>Editar Candidato</title>

<link rel="stylesheet" href="../css/estilo.css">

</head>


<body>


<h1>Editar Candidato</h1>



<form action="" method="POST">


<input type="text" name="nome" 
value="<?php echo $candidato['nome']; ?>">


<input type="number" name="numero" 
value="<?php echo $candidato['numero_candidato']; ?>">


<input type="text" name="cargo" 
value="<?php echo $candidato['cargo']; ?>">


<input type="text" name="partido" 
value="<?php echo $candidato['partido_ficticio']; ?>">



<button name="editar">

Salvar alteração

</button>


</form>



<?php


if(isset($_POST['editar'])){


$nome=$_POST['nome'];
$numero=$_POST['numero'];
$cargo=$_POST['cargo'];
$partido=$_POST['partido'];



$sql="UPDATE candidato SET

nome='$nome',

numero_candidato='$numero',

cargo='$cargo',

partido_ficticio='$partido'


WHERE id_candidato=$id";



mysqli_query($conexao,$sql);



echo "

<script>

alert('Alterado com sucesso!');

window.location='listar.php';

</script>

";


}


?>


</body>

</html>