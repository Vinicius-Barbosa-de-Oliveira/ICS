<?php
	include('context.php');

	$quantidade = $_POST['qtd'];
	$numero = $_POST['numero'];
	$origem = $_POST['origem'];
	$destino = $_POST['destino'];
	$horario = $_POST['horario'];

	$addonibus = "INSERT INTO onibus (qtd, numero) VALUES ('". $quantidade . "','" . $numero . "')";
	$resultadoonibus = mysqli_query($bd, $addonibus) or die(mysqli_error($bd));

	$find_id_onibus = "SELECT id FROM onibus WHERE numero =" .$numero;
	$resultadoid = mysqli_query($bd, $find_id_onibus) or die(mysqli_error($bd));
	$id_result = mysqli_fetch_assoc($resultadoid);
	$idonibus = $id_result['id'];

	$addrota = "INSERT INTO rota (origem, destino, horario, id_onibus) VALUES ('". $origem . "','" . $destino . "','" . $horario . "','" . $idonibus . "')";
	$resultadorota = mysqli_query($bd, $addrota) or die(mysqli_error($bd));
?>

<script>
	alert("deu certo");
	<?php
		//echo "window.location='http://catalobus.com.br';";
	?>
</script>
