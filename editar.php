
<?php 
session_start();
include ('banco.php');

$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if($mysqli->connect_errno){
 	die("Falha");
}

$ID = intval($_GET['ID']);

$sql_cliente = "SELECT * FROM cadastro_impressoras WHERE ID = '$ID'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$impressora = $query_cliente->fetch_assoc();

?>

<form action="gravar.php">
		<fieldset >
			<legend>Alterar informações da impressora: <?php echo $impressora['modelo'] ?>  </legend>
			ID:<br> <input type="text" name="ID" value="<?php echo $ID ?>" /><br><hr>
			<label>Setor da instalação:<br>
				<input type="text" name="setor" value="<?php echo $impressora['setor'] ?>"  /><br><hr>
			</label>
			<label>Modelo da impressora:<br>
				<input type="text" name="modelo" value="<?php echo $impressora['modelo'] ?>" /><br><hr>
			</label>
			<label>Driver:<br>
				<input type="text" name="driver" value="<?php echo $impressora['driver'] ?>" /><br><hr>
			</label>
			<label>Modelo do toner:<br>
				<input type="text" name="toner" value="<?php echo $impressora['toner'] ?>"/><br><hr>
			</label>
			<input type="submit" value="EDITAR" />
		</fieldset>
	</form>

<?php 

?>