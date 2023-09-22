<!DOCTYPE html>
<html>
<head>
    <title>Procurar Nome no Vetor</title>
</head>
<body>

<?php
$nomes = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 5; $i++) {
        $nome = $_POST["nome$i"];
        $nomes[] = $nome;
    }

    $nomeProcurado = isset($_POST["nomeProcurado"]) ? $_POST["nomeProcurado"] : "";

    $posicao = array_search($nomeProcurado, $nomes);

    if ($posicao !== false) {
        echo "<h2>O nome '$nomeProcurado' foi encontrado na posição:</h2>";
        echo "<p>$posicao</p>";
    } else {
        echo "<h2>O nome '$nomeProcurado' não foi encontrado.</h2>";
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
    <h1>Digite um nome para procurar no vetor:</h1>
    <label for="nomeProcurado">Nome:</label>
    <input type="text" id="nomeProcurado" name="nomeProcurado">
    <input type="submit" value="Procurar Nome">
</form>

</body>
</html>
