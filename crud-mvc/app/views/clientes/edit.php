<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="/update" method="post">
        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="<?php echo $cliente['apellido']; ?>" required>
        
        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="<?php echo $cliente['correo']; ?>" required>
        
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" value="<?php echo $cliente['ciudad']; ?>" required>
        
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $cliente['fecha_nacimiento']; ?>" required>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
