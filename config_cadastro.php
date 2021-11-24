<?php

include('banco.php');

$usuario = $_GET['usuario'];
$senha = $_GET['senha'];

echo $usuario;

echo "<hl>";
echo $senha;

$result_usuario = "INSERT INTO impressoras (usuario, senha) values ('$usuario', '$senha')";
$result_usuario = mysqli_query($conn, $result_usuario);


//header('Location:produto.php');

?>