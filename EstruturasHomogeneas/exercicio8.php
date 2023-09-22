<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Produtos</title>
</head>
<body>

<?php
$produtos = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $valorCompra = $_POST["valor_compra"];
    $valorVenda = $_POST["valor_venda"];

    $produto = array(
        "codigo" => $codigo,
        "nome" => $nome,
        "quantidade" => $quantidade,
        "valor_compra" => $valorCompra,
        "valor_venda" => $valorVenda
    );

    $produtos[] = $produto;
}

if (!empty($produtos)) {
    echo "<h2>Listagem de Todos os Produtos:</h2>";
    echo "<ul>";
    foreach ($produtos as $produto) {
        echo "<li>Código: {$produto['codigo']}, Nome: {$produto['nome']}</li>";
    }
    echo "</ul>";
}
?>

<h1>Adicionar Produto</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="codigo">Código do Produto:</label>
    <input type="text" id="codigo" name="codigo" required><br>
    
    <label for="nome">Nome do Produto:</label>
    <input type="text" id="nome" name="nome" required><br>
    
    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade" required><br>
    
    <label for="valor_compra">Valor de Compra:</label>
    <input type="text" id="valor_compra" name="valor_compra" required><br>
    
    <label for="valor_venda">Valor de Venda:</label>
    <input type="text" id="valor_venda" name="valor_venda" required><br>

    <input type="submit" value="Adicionar Produto">
</form>

</body>
</html>
