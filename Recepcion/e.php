<?php
	$string = '';
	$string = '12345';
	$sizeof = strlen($string);
	$result = '';
	echo $string;

	//ciclo for donde vamos volteando la contraseña
	for($x = $sizeof; $x >= 0; $x--)
		$result .= $string[$x];

	//convertimos a md5
	$result = md5($result);
	echo $result;
?>