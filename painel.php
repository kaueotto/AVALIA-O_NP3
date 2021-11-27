<?php 
session_start();
include ('config_validacao_sessao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_toner</title>
</head>

<body>

 <a class="logout" href="logout.php"> SAIR </a> 
    <form class="">        
        <a class="button" href="cadastro_impressoras.php"> CADASTRAR IMPRESSORA </a>
        <a class="button" href="cadastro_toner.php" > ENTRADA DE MATERIAIS </a>
        <a class="button" href="cadastro_impressoras.php"> NOTA </a>

    </form>


</body>

</html>



