<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-200 flex flex-col min-h-screen">



    <div class="container mx-auto mt-5 shadow bg-white p-10 text-base">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-2xl font-bold">Lista de Clientes</h2>
            <a href="/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Agregar Cliente</a>
        </div>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Apellido</th>
                    <th class="py-2 px-4 border-b">Correo</th>
                    <th class="py-2 px-4 border-b">Ciudad</th>
                    <th class="py-2 px-4 border-b">Fecha de Nacimiento</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?php echo $cliente['id']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $cliente['nombre']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $cliente['apellido']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $cliente['correo']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $cliente['ciudad']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $cliente['fecha_nacimiento']; ?></td>
                    <td class="py-2 px-4 border-b">
                        <a href="../app/views/clientes/show?id=<?php echo $cliente['id']; ?>" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">Ver</a>
                        <a href="/edit?id=<?php echo $cliente['id']; ?>" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Editar</a>
                        <a href="/delete?id=<?php echo $cliente['id']; ?>" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
