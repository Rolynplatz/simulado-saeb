<?php
// Definição das credenciais de conexão ao banco de dados
$host = 'localhost';
$user = 'seu_usuario';
$password = 'sua_senha';
$database = 'escola';

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $database);

// Verificação da conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verificar se o parâmetro 'id' está presente na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query para deletar o registro com base no ID fornecido
    $sql = "DELETE FROM alunos WHERE id = $id";

    // Verificação da exclusão
    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Aluno excluído com sucesso!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "Erro ao excluir o aluno: " . $conn->error;
    }
} else {
    echo "ID de aluno não fornecido.";
}

// Fechar a conexão
$conn->close();
?>
