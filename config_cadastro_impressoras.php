<?php

include('banco.php');

$setor = $_GET['setor'];
$modelo = $_GET['modelo'];
$driver = $_GET['driver'];
$toner = $_GET['toner'];
$tipo = $_GET['tipo'];

$sql = $conn->query("SELECT * FROM cadastro_impressoras WHERE modelo='$modelo'");

if(mysqli_num_rows($sql) > 0){
    $result_impressora = "INSERT INTO cadastro_impressoras (setor, modelo, driver, toner, tipo) values ('$setor', '$modelo', '$driver', '$toner', '$tipo' )";
    $result_impressora = mysqli_query($conn, $result_impressora);
    header('Location:cadastro_impressoras.php');
}else{
    $result_impressora = "INSERT INTO cadastro_impressoras (setor, modelo, driver, toner, tipo) values ('$setor', '$modelo', '$driver', '$toner', '$tipo' )";
    $result_toner = "INSERT INTO estoque_toner (modelo, preto, magenta, ciano, amarelo) values ('$toner','0','0','0','0')";
    $result_impressora = mysqli_query($conn, $result_impressora);
    $result_toner = mysqli_query($conn, $result_toner);
    header('Location:cadastro_impressoras.php');
}



