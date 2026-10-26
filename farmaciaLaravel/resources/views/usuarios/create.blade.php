<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/usuarios-create.css') }}">
</head>
<body>
    
</body>

    <header>
        <h1>Registrar usuario</h1>
    </header>

    <main>
        <form method="POST" action="{{ route('usuarios.store') }}" class="form-usuarios">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>

            <label for="email">Correo</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirmar contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Registrar</button>
        </form>
    </main>
</html>