<!DOCTYPE html>
<html>
<head>
    <title>Registro de Produtos</title>
</head>
<body>
    <h2>Registrar Produto</h2>
    <form action="registrar_produto.php" method="post">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="preco">Preço do Produto:</label><br>
        <input type="text" id="preco" name="preco"><br><br>
        <input type="submit" value="Registrar Produto">
    </form>
    <br>
    <a href="exibir_produtos.php">Ver Produtos Registrados</a>
</body>
</html>
