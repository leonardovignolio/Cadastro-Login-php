<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    body{
        background: url(../img/bg.jpg);
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
    <h1>Seja bem vindo ao site!!!</h1>
    <?php echo $_SESSION['nome']; ?>
</body>
</html>