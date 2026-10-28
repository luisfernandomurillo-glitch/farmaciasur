<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Juguete</title>
</head>
<body>
    <header>
        <h1>Registre el nuevo juguete</h1>
    </header>

    <main>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('juguetes.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio">

            <button type="submit">Registrar</button>
        </form>
    </main>
</body>
</html>