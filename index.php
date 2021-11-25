<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="config_verificar.php" class=""  method="GET">
    <h1 class="cadastrar_text">BEM VINDO!</h1>

            <!-- Se o item 'usuário invalido' existir(item configurado no if de não autenticação do login). -->
        
        <?php
            if(isset($_SESSION['login_incorreto'])):
            ?>
            <div>
            <a class="">Usuário/email já utilizado</a><br><br>
            <div>
            <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['login_incorreto']);

            ?>
        <input name="usuario" class="cadastro_text" size="23" type="text" ><br><br>
        <input name="senha" class="cadastro_text" size="23"  type="password"><br><br>
        
        <button type="submit" >CONFIRMAR</button><br><br>
    </form>

</body>
</html>

