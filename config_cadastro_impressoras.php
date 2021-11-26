<?php

include('banco.php');

$setor = $_GET['setor'];
$modelo = $_GET['modelo'];
$driver = $_GET['driver'];
$toner = $_GET['toner'];

$result_usuario = "INSERT INTO cadastro_impressoras (setor, modelo, driver, toner) values ('$setor', '$modelo', '$driver', '$toner' )";
$result_usuario = mysqli_query($conn, $result_usuario);

header('Location:cadastro_impressoras.php');
