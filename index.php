<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <!-- Estilos internos (você também pode mover para um arquivo style.css separado) -->
    </head>
<body>
    
    <!-- Container do formulário -->
    <div class="form-container">
        <h2>Cadastro de Alunos</h2>
        <!-- Formulário de cadastro -->
        <form action="processar_cadastro.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" required>
            </div>
            <input type="submit" value="Cadastrar">
            <h2>Lista de Alunos</h2>

<input type="text" id="searchInput" placeholder="Pesquisar por nome ou curso..." onkeyup="filterTable()">

<table id="studentsTable">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Curso</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Maria Silva</td>
            <td>Engenharia</td>
        </tr>
        <tr>
            <td>João Pereira</td>
            <td>Matemática</td>
        </tr>
        <tr>
            <td>Ana Costa</td>
            <td>Biologia</td>
        </tr>
        <tr>
            <td>Pedro Santos</td>
            <td>Engenharia</td>
        </tr>
            
        <script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        let valid = true;

        // Limpa mensagens de erro
        document.getElementById('nameError').innerText = '';
        document.getElementById('emailError').innerText = '';
        document.getElementById('courseError').innerText = '';

        // Validação do nome
        const name = document.getElementById('name').value.trim();
        if (name === '') {
            document.getElementById('nameError').innerText = 'O nome é obrigatório.';
            valid = false;
        }

        // Validação do e-mail
        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '') {
            document.getElementById('emailError').innerText = 'O e-mail é obrigatório.';
            valid = false;
        } else if (!emailPattern.test(email)) {
            document.getElementById('emailError').innerText = 'Formato de e-mail inválido.';
            valid = false;
        }

        // Validação do curso
        const course = document.getElementById('course').value;
        if (course === '') {
            document.getElementById('courseError').innerText = 'Selecione um curso.';
            valid = false;
        }

        // Se alguma validação falhar, impede o envio do formulário
        if (!valid) {
            event.preventDefault();
        }
    });
</script>

        </form>
    </div>
</body>
</html>