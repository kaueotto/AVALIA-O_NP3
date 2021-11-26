<?php 
include ('banco.php');

$lista_impressoras =  buscar_impressoras($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_impressoras</title>
</head>

<body>
    <form action="config_cadastro_impressoras.php" class="box">
        Setor: <input name="setor" class="style_cadastro" size="23px" type="text"></input> <br><br>
        Modelo:<input name="modelo" class="style_cadastro" size="23px" type="text"></input> <br><br>
        Driver:<input name="driver" class="style_cadastro" size="23px" type="text"></input> <br><br>
        Toner: <input name="toner" class="style_cadastro" size="23px" type="text"></input>
        <select class="style_cadastro "name="type">
            <option>Preto e Branco</option>
            <option>Colorido</option>
        </select>
        <br><br>
        
        <button class="submit"  type="submit"></button>
    </form>

    <table>
        <h1> IMPRESSORAS </h1>
		<tr>
			<th class="imp">SETOR</th>
			<th class="imp">MODELO</th>
			<th class="imp">DRIVER</th>
			<th class="imp">MODELO TONER</th>
		<tr>
		<?php foreach($lista_impressoras as $impressora): ?>
			<tr>
				<td class="imp"><?php echo $impressora['setor']; ?></td>		
				<td class="imp"><?php echo $impressora['modelo']; ?></td>
				<td class="imp"><?php echo $impressora['driver']; ?></td>
				<td class="imp"><?php echo $impressora['toner']; ?></td>
				<td>

				</td>
			</tr>
		<?php endforeach; ?>	
	<table>	
<?php $lista_impressoras =  buscar_impressoras($conn); ?>	
</body>

</html>
 
