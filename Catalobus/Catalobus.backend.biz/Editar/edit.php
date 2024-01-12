<?php
	include('context.php');

	$idonibus = $_GET['id'];
	$idrota = $_GET['idrota'];
	$find_onibus = "SELECT numero, qtd FROM onibus WHERE id=" .$idonibus;
	$find_rota = "SELECT origem, destino, horario FROM rota WHERE id=" .$idrota;
	$resultado_onibus = mysqli_query($bd, $find_onibus)or die(mysqli_error($bd));
	$resultado_rota = mysqli_query($bd, $find_rota)or die(mysqli_error($bd));

	echo "$idonibus";
	echo "$idrota";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar de Ônibus e Rotas</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <header>
        <figure>
           <a href="http://catalobus.com.br/index.php"><img src="Imagens/Onibus Guanabara.png"></a>
        </figure>
        <h1>Editar de Ônibus e Rotas</h1>
    </header>
    <main>
        <form method="post" action="edit_post.php">

<?php
		while ($registroonibus = mysqli_fetch_assoc($resultado_onibus))
		{
			$numero = $registroonibus['numero'];
			$qtd = $registroonibus['qtd'];
			while ($registrorota = mysqli_fetch_assoc($resultado_rota))
			{
				$origem = $registrorota['origem'];
				$destino = $registrorota['destino'];
				$horario = $registrorota['horario'];

				echo "<div class='block1'>";
					echo "<label for='quantidade'>Quantidade</label>";
        	       	        	echo "<input name='quantidade' type='text' value='" .  $qtd . "' />";
					echo "<label for='numero'>Numero</label>";
	         	                echo "<input name='numero' type='text' value='" .  $numero . "' />";
				echo "</div>";
        			echo "<div class='block2'>";

					echo "<label for='origem'>Origem</label>";
	                	        echo "<input name='origem' type='text' value='" .  $origem . "' />";
					echo "<label for='destino'>Destino</label>";
			                echo "<input name='destino' type='text' value='" .  $destino . "' />";
					echo "<label for='horario'>Horario</label>";
                        		echo "<input name='horario' type='time' value='" .  $horario . "' />";

				echo "</div>";
			}
		}
?>


            <input type="submit" value="Editar">
        </form>

    </main>
    <footer>
	<h3>CataloBus</h3>
    </footer>
</body>
</html>
