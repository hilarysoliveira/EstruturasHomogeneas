<!DOCTYPE html>
<html>
<head>
    <title>Lista de Nomes</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomes = array();

    for ($i = 1; $i <= 10; $i++) {
        $nome = $_POST["nome$i"];
        if (!empty($nome)) {
            $nomes[] = $nome;
        }
    }

    if (!empty($nomes)) {
        echo "<h2>Lista de Nomes:</h2>";
        echo "<ul>";
        foreach ($nomes as $nome) {
            echo "<li>$nome</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum nome inserido.</p>";
    }
}
?>

<h1>Insira Dez Nomes:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<label for='nome$i'>Nome $i:</label>";
        echo "<input type='text' id='nome$i' name='nome$i'><br>";
    }
    ?>
    <br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
