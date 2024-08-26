<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Orientada a Objetos PHP - Código Con Juan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gray-200 flex flex-col min-h-screen">
    <header class="p-5 border-b bg-gray-800 shadow">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-4xl font-bold text-gray-200 ">MVC PHP</h1>
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">Crear cuenta</a>
            </nav>
        </div>
    </header>
    <div class="container mx-auto mt-10 text-center space-y-3">
        <h1 class="text-4xl font-extrabold text-indigo-600 mb-10">
            Crud con MVC - Alberto Chávez Crud con MVC - Alberto Chávez Crud con MVC - Alberto Chávez
        </h1>
    </div>

    <div class="container mx-auto mt-5 shadow bg-white p-10 text-base">
        <?php
        require_once __DIR__ . '/config/database.php';
        require_once __DIR__ . '/app/controllers/ClienteController.php';


        $url = isset($_GET['url']) ? $_GET['url'] : '/';

        $controller = new ClienteController();

        switch ($url) {
            case '/':
                $controller->index();
                break;
            case 'create':
                $controller->create();
                break;
            case 'store':
                $controller->store($_POST);
                break;
            case 'edit':
                $controller->edit($_GET['id']);
                break;
            case 'update':
                $controller->update($_POST);
                break;
            case 'show':
                $controller->show($_GET['id']);
                break;
            case 'delete':
                $controller->delete($_GET['id']);
                break;
            default:
                echo "Página no encontrada.";
                break;
        }
        ?>
    </div>
</body>

</html>
