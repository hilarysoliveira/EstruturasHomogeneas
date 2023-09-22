<!DOCTYPE html>
<html>
<head>
    <title>Ordenação de Nomes</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomes = array();

    for ($i = 1; $i <= 5; $i++) {
        $nome = $_POST["nome$i"];
        $nomes[] = $nome;
    }

    // Ordenar os nomes em ordem alfabética
    sort($nomes);

    echo "<h2>Listagem de Nomes Ordenados:</h2>";
    echo "<ul>";
    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    echo "</ul>";
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
    <input type="submit" value="Ordenar Nomes">
</form>

</body>
</html>
