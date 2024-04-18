<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>condicional</title>
</head>
<body>
    <form method="post">
        <label for="numero"> Ingrese un numero:</label>
        <input type="number" name="numero" id="numero">
        <input type= "submit" value="determinar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") 
{
$numero = $_POST["numero"];

if ($numero > 0) {
    echo "El numero $numero es positivo.";
} elseif ($numero < 0) {
    echo "El numero $numero es negativo.";
} else {
    echo " El numero $numero es cero.";
}

}
?>
    
</body>
</html>