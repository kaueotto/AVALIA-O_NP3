<?php
include ('banco.php');

$ID = intval($_GET['ID']);

$setor = $_GET['setor'];
$modelo = $_GET['modelo'];
$driver= $_GET['driver'];
$toner= $_GET['toner'];

$sql_cliente = "SELECT * FROM cadastro_impressoras WHERE ID = '$ID'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$cliente = $query_cliente->fetch_assoc();

$sql_code="UPDATE cadastro_impressoras SET setor = '$setor',modelo = '$modelo',driver = '$driver',toner = '$toner' WHERE ID = '$ID'";

$query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);
if($deu_certo){
echo 'deu certo';}

header('Location:cadastro_impressoras.php');

?>