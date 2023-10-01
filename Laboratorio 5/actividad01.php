<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
<form method="post" action="">
    Ingresar Valor 1:<br>
    <input type="text" name="valor1"><br>
    Ingresar Valor 2:<br>
    <input type="text" name="valor2"><br>
    <input type="submit" name="Suma" value="Suma">
</form>

<?php
// Verificar si se enviaron los valores del formulario
if(isset($_POST['valor1']) && isset($_POST['valor2'])){
    // Obtener los valores del formulario
    $numero1 = $_POST['valor1'];
    $numero2 = $_POST['valor2'];
    
    // Realizar la suma
    $suma = $numero1 + $numero2;
    
    // Mostrar el resultado
    echo "El Resultado de la Suma es: " . $suma;
}
?>
</body>
</html>
