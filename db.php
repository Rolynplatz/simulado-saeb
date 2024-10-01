<?php
// Definição das credenciais de conexão
$host = 'localhost';       // Endereço do servidor do banco de dados
$user = 'seu_usuario';     // Nome de usuário do banco de dados
$password = 'sua_senha';   // Senha do banco de dados
$database = 'nome_do_banco'; // Nome do banco de dados

// Criação da conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $database);

// Verificação de conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
} else {
    echo "Conexão estabelecida com sucesso!";
}
$conn = new mysqli($host, $user, $password, $database);

// Verificação de conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

CREATE DATABASE escola;
// Comando SQL para criar a tabela `alunos`

$sql = "CREATE TABLE alunos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    idade INT(3) NOT NULL,
    email VARCHAR(50) NOT NULL,
    curso VARCHAR(50) NOT NULL
)";

// Execução da consulta e verificação de sucesso
if ($conn->query($sql) === TRUE) {
    echo "Tabela 'alunos' criada com sucesso!";
} else {
    echo "Erro ao criar a tabela: " . $conn->error;
}

// Fechamento da conexão
$conn->close();

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Idade</th><th>Email</th><th>Curso</th><th>Ação</th></tr>";
    // Loop para exibir os dados em cada linha da tabela com um link de exclusão
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["idade"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["curso"] . "</td>";
        // Adicionar link de exclusão passando o ID pela URL
        echo "<td><a href='deletar.php?id=" . $row["id"] . "' onclick=\"return confirm('Tem certeza que deseja excluir este aluno?');\">Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhum aluno cadastrado ainda.</p>";
}

// Fechar a conexão com o banco
$conn->close();
?>
