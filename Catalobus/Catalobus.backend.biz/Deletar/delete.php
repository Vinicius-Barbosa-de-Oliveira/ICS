<?php
	include('context.php');

	$idonibus= $_GET['id'];
	$idrota= $_GET['idrota'];
	$del_rota = "DELETE FROM rota WHERE id = " . $idrota;
	$del_onibus = "DELETE FROM onibus WHERE id = " . $idonibus;

	$resultado_rota = mysqli_query($bd, $del_rota)or die(mysqli_error($bd));
	$resultado_onibus = mysqli_query($bd, $del_onibus)or die(mysqli_error($bd));
?>
<script>
	alert("Onibus e Rota Removidos do sistema com susesso");
	<?php
		//echo "window.location='http://catalobus.com.br/index.php";
	?>
</script>
