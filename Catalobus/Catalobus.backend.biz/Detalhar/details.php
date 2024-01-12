<?php
	include('context.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Ônibus e Rotas</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
<header>
	<figure>
		<a href="http://catalobus.com.br/index.php"><img src="Imagens/Onibus Guanabara.png"></a>
	</figure>
	<h1>Detalhes do onibus e da rota</h1>
</header>
<main>
<?php
	$id_onibus = $_GET['id'];
	$id_rota = $_GET['idrota'];
	$find_onibus = "SELECT * FROM onibus WHERE id=".$id_onibus;
	$find_rota = "SELECT * FROM rota WHERE id=".$id_rota;
	$resultado_onibus = mysqli_query($bd, $find_onibus)or die(mysqli_error($bd));
	$resultado_rota = mysqli_query($bd, $find_rota)or die(mysqli_error($bd));
?>
	<div class="block1">
		<table>
			<thead>
				<tr>
					<th>Numero</th>
					<th>Qunatidade</th>
					<th>Origem</th>
					<th>Destino</th>
					<th>Horario</th>
				</tr>
			</thead>
			<tbody>
				<tr>
<?php
					while($registro_onibus = mysqli_fetch_assoc($resultado_onibus))
					{
						echo "<td>". $registro_onibus['numero'] . "</td>";
						echo "<td>". $registro_onibus['qtd'] . "</td>";
						while($registro_rota = mysqli_fetch_assoc($resultado_rota))
						{
							echo "<td>". $registro_rota['origem'] ."</td>";
							echo "<td>". $registro_rota['destino'] ."</td>";
							echo "<td>". $registro_rota['horario'] ."</td>";
						}
					}
?>
				</tr>
			</tbody>
		</table>
	</div>
</main>
</body>
</html>
