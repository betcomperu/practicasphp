<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Cliente</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>Agregar Cliente</h1>
    <form action="/store" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>
        
        <label for="correo">Correo:</label>
        <input type="email" name="correo" required>
        
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" required>
        
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required>
        
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
