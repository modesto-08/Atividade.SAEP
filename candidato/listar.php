<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../conexao.php";


$sql = "SELECT * FROM candidato";

$resultado = mysqli_query($conexao,$sql);

?>


<!DOCTYPE html>
<html>

<head>

<title>Lista de Candidatos</title>

<link rel="stylesheet" href="../css/estilo.css">

</head>


<body>


<h1>Candidatos cadastrados</h1>


<table border="1" align="center" cellpadding="10">


<tr>

<th>ID</th>
<th>Nome</th>
<th>Número</th>
<th>Cargo</th>
<th>Partido</th>
<th>Ações</th>

</tr>



<?php

while($linha = mysqli_fetch_assoc($resultado)){


echo "

<tr>

<td>".$linha['id_candidato']."</td>

<td>".$linha['nome']."</td>

<td>".$linha['numero_candidato']."</td>

<td>".$linha['cargo']."</td>

<td>".$linha['partido_ficticio']."</td>


<td>

<a href='editar.php?id=".$linha['id_candidato']."'>
Editar
</a>


|

<a href='excluir.php?id=".$linha['id_candidato']."'>
Excluir
</a>


</td>


</tr>


";


}


?>


</table>


<br>

<a href="cadastrar.php">
Novo candidato
</a>


</body>

</html>