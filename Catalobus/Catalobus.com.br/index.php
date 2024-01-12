<?php
	include('context.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Onibuss</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <figure>
           <a href="http://catalobus.com.br/index.php" ><img src="Imagens/Onibus Guanabara.png"></a>
        </figure>
        <h1>Lista de Onibus</h1>
		<a href="http://catalobus.backend.biz">Cadastrar novo onibus e rota</a>
    </header>
    <main>
	<?php
		$comando_onibus = "SELECT * FROM onibus";
		$resultadoonibus = mysqli_query($bd, $comando_onibus) or die(mysqli_error($bd));
	?>
        <table class="block1">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Origem</th>
                    <th>Destino</th>
		</tr>
	    </thead>
	<?php
                while ($registro_onibus = mysqli_fetch_assoc($resultadoonibus))
		{
			$rota_find = "SELECT * FROM rota WHERE id_onibus= " . $registro_onibus['id'];
			$rota = mysqli_query ($bd, $rota_find) or die(mysqli_error($bd)); 
			while ($origem_destino_id = mysqli_fetch_assoc($rota))
			{
				$origem = $origem_destino_id['origem'];
				$destino = $origem_destino_id['destino'];
				$id_rota = $origem_destino_id['id'];
				$id_onibus = $origem_destino_id['id_onibus'];
				$numero = $registro_onibus['numero'];

				echo "<tbody>";
				echo "<tr>";
					echo "<td>" . $numero . "</td>";
					echo "<td>" . $origem . "</td>";
					echo "<td>" . $destino . "</td>";
					echo "<td><button><a href='http://catalobus.backend.biz/details.php?id=".$id_onibus."&idrota=".$id_rota."'>Detalhes</a></button></td>";
					echo "<td><button><a href='http://catalobus.backend.biz/edit.php?id=".$id_onibus."&idrota=".$id_rota."'>Editar</a></button></td>";
					echo "<td><button><a href='http://catalobus.backend.biz/delete.php?id=".$id_onibus."&idrota=".$id_rota."'>delete</a></button></td>";
				echo "</tr>";
				echo "</tbody>";
			}
		}

	?>
	</table>

</body>
</html>
