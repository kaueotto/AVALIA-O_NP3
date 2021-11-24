<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'N3';


$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

$conn = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);
