<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Cliente</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>Detalles del Cliente</h1>
    <p><strong>ID:</strong> <?php echo $cliente['id']; ?></p>
    <p><strong>Nombre:</strong> <?php echo $cliente['nombre']; ?></p>
    <p><strong>Apellido:</strong> <?php echo $cliente['apellido']; ?></p>
    <p><strong>Correo:</strong> <?php echo $cliente['correo']; ?></p>
    <p><strong>Ciudad:</strong> <?php echo $cliente['ciudad']; ?></p>
    <p><strong>Fecha de Nacimiento:</strong> <?php echo $cliente['fecha_nacimiento']; ?></p>
    <a href="/">Volver a la lista</a>
</body>
</html>
