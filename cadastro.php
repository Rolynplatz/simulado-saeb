<?php
// Definição das credenciais de conexão ao banco
$host = 'localhost';       // Endereço do servidor
$user = 'seu_usuario';     // Nome de usuário do banco
$password = 'sua_senha';   // Senha do banco
$database = 'escola';      // Nome do banco de dados

// Criação da conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $database);

// Verificação da conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recebimento dos dados do formulário via método POST
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$curso = $_POST['curso'];

// Inserção dos dados no banco de dados
$sql = "INSERT INTO alunos (nome, idade, email, curso) VALUES ('$nome', '$idade', '$email', '$curso')";

// Verificação da inserção e redirecionamento
if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Cadastro realizado com sucesso!');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechamento da conexão
$conn->close();

<form action="cadastro.php" method="POST">

// Verificar se a URL possui o parâmetro 'mensagem'
if (isset($_GET['mensagem'])) {
    // Definir a mensagem e o estilo baseado no valor de 'mensagem'
    $mensagem = $_GET['mensagem'];

    if ($mensagem == "sucesso") {
        echo "<div class='mensagem sucesso'>Aluno cadastrado com sucesso!</div>";
    } elseif ($mensagem == "erro") {
        echo "<div class='mensagem erro'>Erro ao cadastrar o aluno. Tente novamente.</div>";
    } elseif ($mensagem == "deletado") {
        echo "<div class='mensagem sucesso'>Aluno excluído com sucesso!</div>";
    }
}
?>
