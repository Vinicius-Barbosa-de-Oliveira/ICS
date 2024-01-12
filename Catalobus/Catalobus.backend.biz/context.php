<?php
	$bd = mysqli_connect('192.168.100.20', 'ADM', 'ifrn') or die('Incapaz de Conctar');
	mysqli_select_db($bd, 'onibus') or die(mysqli_error($bd));
?>
