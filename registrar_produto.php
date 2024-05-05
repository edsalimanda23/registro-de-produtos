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

// Receber os dados do formulário
$nome = $_POST['nome'];
$preco = $_POST['preco'];

// Inserir os dados na tabela
$sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

if ($conexao->query($sql) === TRUE) {
    echo "Produto registrado com sucesso!";
} else {
    echo "Erro ao registrar o produto: " . $conexao->error;
}

// Fechar a conexão
$conexao->close();
?>
