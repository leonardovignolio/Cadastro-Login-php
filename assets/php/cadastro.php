<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleCadastro.css">
    <title>Cadastro</title>
</head> 
<body>
<body>

    <?php
    if(isset($_SESSION['msg']))
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>
    <form action="processa.php" method="post">

        <h2>Cadastre seu Email</h2>

        <div class="single-input">
        <input class="input" type="text" name="cadastroNome"  required>
        <label for="nome">Nome</label>
        </div>

        <div class="single-input">
        <input class="input" type="email" name="cadastroemail"  required>
        <label for="email">Email</label>
        </div>

        <div class="single-input">
        <input class="input" type="password" name="cadastroSenha" required>
        <label for="senha">Senha</label>
        </div>

        <div class="single-input">
        <input class="input" type="password" name="cadastroConfirmaSenha" required>
        <label for="senha">Confime a senha</label>
        </div>
        
        </div>

        <div class="btn">
            <input type="submit" value="Cadastrar">

            <a href="login.php">Login</a>
        </div>
    
    </form>
    </div>  
</body>
</body>
</html>