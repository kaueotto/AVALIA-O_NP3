<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'N3';


$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

$conn = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);


function buscar_impressoras($conn){
    $sqlBusca = 'SELECT * FROM cadastro_impressoras';
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $impressoras = array();
    while($impressora = mysqli_fetch_assoc($resultado)){
        $impressoras[] = $impressora;
    }
    return $impressoras;
}	