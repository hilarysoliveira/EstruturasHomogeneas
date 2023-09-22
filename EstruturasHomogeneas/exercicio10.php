<!DOCTYPE html>
<html>
<head>
    <title>Vetor Intercalado e Ordenado</title>
</head>
<body>

<?php
// Crie os vetores A e B com 25 elementos inteiros cada (substitua com seus próprios valores)
$vetorA = range(1, 25); // Exemplo: números de 1 a 25
$vetorB = range(26, 50); // Exemplo: números de 26 a 50

// Intercale os vetores A e B para criar o vetor V
$vetorV = array();
for ($i = 0; $i < 25; $i++) {
    $vetorV[] = $vetorA[$i];
    $vetorV[] = $vetorB[$i];
}

// Ordene o vetor V em ordem decrescente
rsort($vetorV);
?>

<h1>Vetor Intercalado e Ordenado</h1>

<h2>Vetor V:</h2>
<?php
echo "[" . implode(", ", $vetorV) . "]";
?>

</body>
</html>
