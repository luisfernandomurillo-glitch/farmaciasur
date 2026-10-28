<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juguetería El Trompo</title>
    <link rel="stylesheet" href="{{ asset('css/jugueteria.css') }}">
</head>
<body>
    <header>
        <h1>Juguetería El Trompo</h1>
        <a href="{{ route('juguetes.create') }}">Nuevo juguete</a>
    </header>

    <main>
        <p>TODAY IS THE DAY!</p>

        <p>Hay {{ count($juguetes) }} juguetes en el estante:</p>

        <ul>
               @foreach ($juguetes as $juguete)
                <li>{{ $juguete->nombre }} - {{ $juguete->precio }} Bs</li>
               @endforeach
        </ul>

        <p>Estante atendido por Murillo Apaza Luis Fernando</p>
    </main>

    <footer>
        <p>Integradora - Murillo Apaza Luis Fernando - 27 de octubre de 2026</p>
    </footer>
</body>
</html>