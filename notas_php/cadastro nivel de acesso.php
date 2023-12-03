<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="post" action="processa_cadastro.php">
        <label for="username">Usuário:</label>
        <input type="text" name="username" required><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>
        <label for="access_level">Nível de Acesso:</label>
        <select name="access_level">
            <option value="1">Nível 1</option>
            <option value="2">Nível 2</option>
        </select><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>


<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $access_level = $_POST["access_level"];

    // Verifique se o usuário já existe
    $check_sql = "SELECT * FROM users WHERE username = '$username'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows == 0) {
        // Insira o novo usuário no banco de dados
        $insert_sql = "INSERT INTO users (username, password, access_level) VALUES ('$username', '$password', $access_level)";
        
        if ($conn->query($insert_sql) === TRUE) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
        }
    } else {
        echo "Nome de usuário já está em uso. Por favor, escolha outro.";
    }
}
?>



Validação de entrada: Certifique-se de que os dados inseridos pelos usuários sejam validados para evitar entradas maliciosas. Por exemplo, você pode usar funções como mysqli_real_escape_stringescapar de caracteres especiais e impedir injeções de SQL.

Hash de Senhas: Nunca armazene senhas de forma direta no banco de dados. Use diversãopassword_hash()para armazenpassword_verify()para verificar senhas durante o login.



Verificação de Senhas Fortes: Implementar

Prevenção de injeção de SQL: Use declarações preparadas ao interagir com o banco de dados para evitar ataques de injeção de SQL. Evite a concatenação direta de variáveis ​​no

Limitação de tentativas de login: Implemente uma política de bloqueio de contas temporárias após um número excedente

Proteção contra Cross-Site Scripting (XSS): Certifique-se de que os dados exibidos nas páginas da web sejam específicos para evitar ataques XSS.


Segurança da Sessão: Mantenha as sessões dos usuários seguras. Use session_regenerate_id()para gerar novos IDs de sessão após o login e certifique-se de que as variáveis

Auditoria de Logs: Mantenha logs de atividade do sistema para rastrear ações dos

Atualizações e Patching: Mantenha seu servidor web, PHP e MySQL atualizado com as últimas correções de segurança.



Autenticação de Dois Fatores (2FA): Considere implementar a autenticação de dois fatores para uma camada adicional de segurança.

Lembre-se de que a segurança é uma preocupação contínua




