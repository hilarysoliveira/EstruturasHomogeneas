<!DOCTYPE html>
<html>
<head>
    <title>Notas dos Alunos</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alunos = array();

    for ($i = 1; $i <= 5; $i++) {
        $nome = $_POST["nome$i"];
        $nota1 = floatval($_POST["nota1_$i"]);
        $nota2 = floatval($_POST["nota2_$i"]);
        $media = ($nota1 + $nota2) / 2;

        $aluno = array(
            "nome" => $nome,
            "nota1" => $nota1,
            "nota2" => $nota2,
            "media" => $media
        );

        $alunos[] = $aluno;
    }

    echo "<h2>Notas dos Alunos:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Nota 1</th><th>Nota 2</th><th>Média</th></tr>";
    foreach ($alunos as $aluno) {
        echo "<tr>";
        echo "<td>{$aluno['nome']}</td>";
        echo "<td>{$aluno['nota1']}</td>";
        echo "<td>{$aluno['nota2']}</td>";
        echo "<td>{$aluno['media']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

<h1>Insira os Nomes e Notas dos Alunos:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<label for='nome$i'>Nome do Aluno $i:</label>";
        echo "<input type='text' id='nome$i' name='nome$i'><br>";
        echo "<label for='nota1_$i'>Nota 1:</label>";
        echo "<input type='text' id='nota1_$i' name='nota1_$i'><br>";
        echo "<label for='nota2_$i'>Nota 2:</label>";
        echo "<input type='text' id='nota2_$i' name='nota2_$i'><br>";
    }
    ?>
    <br>
    <input type="submit" value="Calcular Médias">
</form>

</body>
</html>
