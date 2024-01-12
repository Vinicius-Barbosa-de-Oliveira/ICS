<?php
	include('context.php');

	$numero = $_POST['numero'];
	$qtd = $_POST['qtd'];
	$origem = $_POST['origem'];
	$destino = $_POST['destino'];
	$horario = $_POST['horario'];

	$up_onibus = "UPDATE onibus SET numero='".$numero."',qtd='".$qtd."' WHERE id=".$id;
	$up_rota = "UPDATE rota SET origem='".$origem."',destino='".$destino."',horario='".$horario."' WHERE id=".$idrota;

	$resultado_onibus = mysqli_query($bd, $up_onibus)or die(mysqli_error($bd));
	$resultado_rota = mysqli_query($bd, $up_rota)or die(mysqli_error($bd));
?>
<script>
	alert("Onibus e Rota Atualizados com sucesso");
	<?php
		echo "window.location='http://catalobus.com.br/index";
	?>
</script>
