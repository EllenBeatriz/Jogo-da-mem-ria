<?php
$host = "localhost";
$user = "root";
$senha = "123";
$banco = "usuario";
$conexao = mysql_connect($host, $user, $senha) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>