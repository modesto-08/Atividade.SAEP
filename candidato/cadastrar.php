<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Candidato</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

<h1>Cadastrar Candidato</h1>


<form action="salvar.php" method="POST">

    <input type="text" name="nome" placeholder="Nome do candidato" required>

    <input type="number" name="numero_candidato" placeholder="Número do candidato" required>

    <input type="text" name="cargo" placeholder="Cargo" required>

    <input type="text" name="partido_ficticio" placeholder="Partido fictício">


    <button type="submit">
        Cadastrar
    </button>

</form>


<br>

<a href="listar.php">
Ver candidatos cadastrados
</a>


</body>
</html>