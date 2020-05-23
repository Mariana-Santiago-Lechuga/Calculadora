<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title >Calculadora</title>
</head>
<body>
	<center> 
		<h1 style="font-family: serif; color: #452BC7  "> Calculadora </h1> 
   <form action="calculadora.php" >
    <input type="text" name= "x" style="border: 1px dotted #999; background-color: #f8f3eb;">
    <select name = "operacion" style=" background-color: #c3edea; border-radius: 12px;">
        <option value="suma">suma (+) </option>   
        <option value="resta">resta (-)</option>  
        <option value="multiplica">multiplica (*)</option>  
        <option value="divide">divide (/)</option>  
    </select>
    <input type="text" name = "y" style="border: 1px dotted #999;  background-color: #f8f3eb;">
    <input type="submit" style="background-color: #fc7e2f; border-radius: 10px;">
    </form>

	</center>
	
</body>
</html>

<?php

    require_once('lib/nusoap.php');
$cliente= new nusoap_client('http://localhost/calculadora/servicio.php');
$resultado = $cliente->call('calculadora', array( 'x', 'y', 'operacion'));

echo $resultado;

?>