<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Nomes Numerados</title>
</head>
<body>

<?php
$nomes = array(); // Inicializa um vetor vazio para armazenar os nomes

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 10; $i++) {
        $nome = $_POST["nome$i"];
        $nomes[] = $nome; // Adiciona o nome ao vetor
    }
}

// Verifica se há nomes no vetor antes de imprimir a listagem
if (!empty($nomes)) {
    echo "<h2>Listagem de Nomes Numerados:</h2>";
    echo "<ol>";
    foreach ($nomes as $indice => $nome) {
        $numero = $indice + 1; // Adiciona 1 ao índice para criar a numeração
        echo "<li>$numero. $nome</li>";
    }
    echo "</ol>";
}
?>

<h1>Insira 10 Nomes:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<label for='nome$i'>Nome $i:</label>";
        echo "<input type='text' id='nome$i' name='nome$i'><br>";
    }
    ?>
    <br>
    <input type="submit" value="Mostrar Nomes Numerados">
</form>

</body>
</html>
