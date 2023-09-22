<!DOCTYPE html>
<html>
<head>
    <title>Vetor Soma</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vetor1 = array();
    $vetor2 = array();

    for ($i = 1; $i <= 5; $i++) {
        $numero1 = intval($_POST["numero1_$i"]);
        $numero2 = intval($_POST["numero2_$i"]);

        $vetor1[] = $numero1;
        $vetor2[] = $numero2;
    }

    $vetorSoma = array();
    for ($i = 0; $i < 5; $i++) {
        $soma = $vetor1[$i] + $vetor2[$i];
        $vetorSoma[] = $soma;
    }

    echo "<h2>Vetor Soma:</h2>";
    echo "[" . implode(", ", $vetorSoma) . "]";
}
?>

<h1>Insira Números nos Vetores:</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<label for='numero1_$i'>Número $i no Vetor 1:</label>";
        echo "<input type='text' id='numero1_$i' name='numero1_$i'><br>";
        echo "<label for='numero2_$i'>Número $i no Vetor 2:</label>";
        echo "<input type='text' id='numero2_$i' name='numero2_$i'><br>";
    }
    ?>
    <br>
    <input type="submit" value="Calcular Vetor Soma">
</form>

</body>
</html>
