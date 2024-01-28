<?php

$usuario = 'root';
$senha = 'root';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->connect_errno){
    echo "falha ao conectar : ". $mysqli->connect_errno ;
}else
echo("")
?>