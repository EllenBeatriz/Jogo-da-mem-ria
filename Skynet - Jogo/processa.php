<?php
include_once("conexao.php");

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = ("INSERT INTO usuario(login, senha)VALUES('$login', '$senha', NOW())");
$resultado_usuario = mysqli_query($conexao, $result_usuario);
?>