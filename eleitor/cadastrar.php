<!DOCTYPE html>
<html>

<head>

<title>Cadastrar Eleitor</title>

<link rel="stylesheet" href="../css/estilo.css">

</head>


<body>


<h1>Cadastrar Eleitor</h1>


<form action="salvar.php" method="POST">


<input type="text" name="nome" placeholder="Nome do eleitor" required>


<input type="number" name="numero_titulo" placeholder="Número do título" required>


<input type="text" name="cidade" placeholder="Cidade" required>



<button type="submit">
Cadastrar
</button>


</form>


<br>

<a href="listar.php">
Ver eleitores cadastrados
</a>


</body>

</html>