<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'N3';


$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

$conn = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);

$lista_impressoras =  buscar_impressoras($conn);

$lista_toners =  buscar_toner($conn);

function buscar_impressoras($conn){
    $sqlBusca = 'SELECT * FROM cadastro_impressoras';
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $impressoras = array();
    while($impressora = mysqli_fetch_assoc($resultado)){
        $impressoras[] = $impressora;
    }
    return $impressoras;
}	

function buscar_toner($conn){
    $sqlBusca = 'SELECT * FROM estoque_toner';
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $toners = array();
    while($toner = mysqli_fetch_assoc($resultado)){
        $toners[] = $toner;
    }
    return $toners;
}	