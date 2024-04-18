
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
<meta charset="UTF-8">
<title>Suma de 2 numeros en PHP</title>
</head>
<body>
<H2>Suma de 2 numeros en PHP</H2>
<form action="Ejemplo2.php" method="POST">
<table>
<tr>
<td><p>Nota 1</p>
    <input type="text" name="numero1"></td>
</tr>
<tr>
<td><p>Nota 2</p>
    <input type="text" name="numero2"></td>
</tr>
<tr>
<td><p>Nota 3</p>
    <input type="text" name="numero3"></td>
</tr>
<tr>
<td> <input type="submit" value="Sumar"> </td>
</tr>
</table>
</form>
</body>
</html>
<center>
<?php
if($_POST)
{
$num1 = $_POST
['numero1'];
$num2 = $_POST
['numero2'];
$num3 = $_POST
['numero3'];
$suma = $num1 + $num2 + $num3;
 echo "La suma de: ".$num1." y ".$num2." y ".$num3." es: ".$suma;

}
?>
</center>
