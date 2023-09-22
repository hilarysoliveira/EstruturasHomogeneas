<!DOCTYPE html>
<html>
<head>
    <title>Exibir Nome por Posição</title>
</head>
<body>

<?php
$nomes = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 5; $i++) {
        $nome = $_POST["nome$i"];
        $nomes[] = $nome;
    }

    $numeroSelecionado = isset($_POST["numero"]) ? intval($_POST["numero"]) : -1;

    $nomeExibido = "";

    if ($numeroSelecionado >= 0 && $numeroSelecionado < count($nomes)) {
        $nomeExibido = $nomes[$numeroSelecionado];
    }
}
?>

<h1>Insira Cinco Nomes:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<label for='nome$i'>Nome $i:</label>";
        echo "<input type='text' id='nome$i' name='nome$i'><br>";
    }
    ?>
    <br>
    <label for="numero">Digite um número para exibir o nome (0 a 4):</label>
    <input type="number" id="numero" name="numero" min="0" max="4">
    <input type="submit" value="Exibir Nome">
</form>

<?php
if (!empty($nomeExibido)) {
    echo "<h2>Nome Selecionado:</h2>";
    echo "<p>$nomeExibido</p>";
}
?>

</body>
</html>
