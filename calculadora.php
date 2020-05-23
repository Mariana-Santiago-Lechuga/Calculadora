<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body> 
   	<h2 style="font-family: sans-serif; color: #f40552"> Resultado</h2>
</body>
</html>

<?php
$x = $_GET['x'];
$y = $_GET['y'];
$operacion = $_GET['operacion'];

    function calculadora ($x, $y, $operacion){
        if ($operacion == "suma"){
                return $x + $y;
        }else  if ($operacion == "resta"){
                return   $x - $y;
        }else  if ($operacion == "multiplica"){
                return $x * $y;
        }else  if ($operacion == "divide"){
                return  $x / $y;}
        return 0;
    }

echo calculadora ($x, $y, $operacion);

?>