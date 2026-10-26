<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Lotes</title>
    <link rel="stylesheet" href="{{ asset('css/lotes-index.css') }}">
</head>
<body>
    <header>
        <h1>Listar Lotes</h1>
    </header>

    <main>
         <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unit.</th>
                    <th>Ingreso</th>
                    <th>Caducidad</th>
                    <th>Laboratorio</th>
                    <th>Disponible</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lotes as $lote)
                    <tr>
                        <td>{{ $lote->nombre_producto }}</td>
                        <td>{{ $lote->cantidad }}</td>
                        <td>{{ number_format($lote->precio_unitario, 2) }}</td>
                        <td>{{ $lote->fecha_ingreso->format('d/m/Y') }}</td>
                        <td>{{ $lote->fecha_caducidad->format('d/m/Y') }}</td>
                        <td>{{ $lote->laboratorio }}</td>
                        <td>{{ $lote->disponible ? 'Sí' : 'No' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No hay lotes registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>