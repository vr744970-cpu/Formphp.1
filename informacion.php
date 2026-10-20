<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Empleado</title>
</head>
<body>
    <h2>Información Recibida del Empleado</h2>
    
    <?php
    $identificacion = $_POST['Identificacion'];
    $nombreApellido = $_POST['NomApellidos'];
    $cargo = $_POST['Cargo'];
    $salario = $_POST['Salario'];

    echo "<p><strong>Identificación:</strong> " . $identificacion . "</p>";
    echo "<p><strong>Nombres y Apellidos:</strong> " . $nombreApellido . "</p>";
    echo "<p><strong>Cargo:</strong> " . $cargo . "</p>";
    echo "<p><strong>Salario:</strong> " . $salario . "</p>";
    ?>
</body>
</html>
