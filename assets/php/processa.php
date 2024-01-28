<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["cadastroNome"];
    $email = filter_var($_POST["cadastroemail"], FILTER_SANITIZE_EMAIL);
    $senha = $_POST["cadastroSenha"];
    $confirmaSenha = $_POST["cadastroConfirmaSenha"];

    
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmaSenha)) {
        $_SESSION['msg'] = 'Por favor, preencha todos os campos.';
        header('Location: cadastro.php');
        exit();
    }

    if ($senha !== $confirmaSenha) {
        $_SESSION['msg'] = 'As senhas não coincidem.';
        header('Location: cadastro.php');
        exit();
    }

   
    $host = 'localhost';
    $usuarioBanco = 'root';
    $senhaBanco = 'root';
    $nomeBanco = 'login';

    $conexao = new mysqli($host, $usuarioBanco, $senhaBanco, $nomeBanco);

   
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        $_SESSION['msg'] = 'Cadastro realizado com sucesso!';
        header('Location: cadastro.php');
        exit();
    } else {
        $_SESSION['msg'] = 'Erro ao cadastrar usuário: ' . $conexao->error;
        header('Location: cadastro.php');
        exit();
    }

   
    $conexao->close();
} else {
    
    header('Location: cadastro.php');
    exit();
}
?>
