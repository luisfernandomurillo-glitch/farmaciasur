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

        <form action="{{ route('login.store') }}" method="POST">
        @csrf
            <label for="correo">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="usuario@ejemplo.com" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña" required>

            <button type="submit">Ingresar</button>

        </form>
    </main>
</body>
</html>