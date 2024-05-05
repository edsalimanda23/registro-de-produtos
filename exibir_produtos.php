<?php
// Conectar ao banco de dados
$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "register_db";

$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Consulta para selecionar todos os produtos
$sql = "SELECT * FROM produtos";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    // Exibir os produtos em uma tabela
    echo "<h2>Produtos Registrados</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Preço</th></tr>";
    while($row = $resultado->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["preco"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum produto registrado.";
}

// Fechar a conexão
$conexao->close();
?>
