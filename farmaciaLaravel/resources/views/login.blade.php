<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <main>
        <h1>Iniciar sesión</h1>

        <form action="" method="POST">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu usuario" required>

            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="usuario@ejemplo.com" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="clave" placeholder="Tu contraseña" required>

            <button type="submit">Ingresar</button>

        </form>
    </main>
</body>
</html>