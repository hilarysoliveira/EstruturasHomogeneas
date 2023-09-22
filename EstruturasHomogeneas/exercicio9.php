<!DOCTYPE html>
<html>
<head>
    <title>Vetor de Inversos</title>
</head>
<body>

<?php
$vetorOriginal = array();
$vetorInversos = array();

$contador = 0;

while ($contador < 10) {
    $numero = intval(readline("Digite um número inteiro positivo (ou um número negativo para sair): "));

    if ($numero < 0) {
        break; // Sai do loop quando encontrar um número negativo
    }

    $vetorOriginal[] = $numero;

    if ($numero != 0) {
        $vetorInversos[] = 1 / $numero;
    } else {
        echo "Você digitou zero. O inverso não pode ser calculado.\n";
    }

    $contador++;
}

echo "<h2>Vetor Original:</h2>";
echo "[" . implode(", ", $vetorOriginal) . "]";

if (!empty($vetorInversos)) {
    echo "<h2>Vetor de Inversos:</h2>";
    echo "[" . implode(", ", $vetorInversos) . "]";
} else {
    echo "<h2>Nenhum inverso calculado devido a zeros no vetor original.</h2>";
}
?>

</body>
</html>
