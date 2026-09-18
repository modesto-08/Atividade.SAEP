<?php

include "../conexao.php";


$sql="SELECT * FROM eleitor";


$resultado=mysqli_query($conexao,$sql);


?>


<!DOCTYPE html>
<html>


<head>

<title>Lista de Eleitores</title>

<link rel="stylesheet" href="../css/estilo.css">

</head>


<body>


<h1>Eleitores cadastrados</h1>



<table border="1" align="center" cellpadding="10">


<tr>

<th>ID</th>
<th>Nome</th>
<th>Título</th>
<th>Cidade</th>
<th>Ações</th>

</tr>



<?php


while($linha=mysqli_fetch_assoc($resultado)){


echo "

<tr>

<td>".$linha['id_eleitor']."</td>

<td>".$linha['nome']."</td>

<td>".$linha['numero_titulo']."</td>

<td>".$linha['cidade']."</td>


<td>

<a href='editar.php?id=".$linha['id_eleitor']."'>
Editar
</a>


|

<a href='excluir.php?id=".$linha['id_eleitor']."'>
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
Novo eleitor
</a>


</body>


</html>