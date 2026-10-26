<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Lote</title>
    <link rel="stylesheet" href="{{ asset('css/lotes-create.css') }}">
</head>
<body>
    <header>
        <h1>Nuevo Lote</h1>
    </header>

    <main>
        <form method="POST" action="{{ route('lotes.store') }}" class="form-lotes">
            @csrf

            <label for="nombre_producto">Nombre del producto</label>
            <input type="text" id="nombre_producto" name="nombre_producto"
                   value="{{ old('nombre_producto') }}" required>

            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" min="1"
                   value="{{ old('cantidad') }}" required>

            <label for="precio_unitario">Precio unitario</label>
            <input type="number" id="precio_unitario" name="precio_unitario"
                   step="0.01" min="0" value="{{ old('precio_unitario') }}" required>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="3" value="{{ old('descripcion') }}"></textarea>

            <label for="fecha_ingreso">Fecha de ingreso</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso"
                   value="{{ old('fecha_ingreso') }}" required>

            <label for="fecha_caducidad">Fecha de caducidad</label>
            <input type="date" id="fecha_caducidad" name="fecha_caducidad"
                   value="{{ old('fecha_caducidad') }}" required>

            <label for="laboratorio">Laboratorio</label>
            <input type="text" id="laboratorio" name="laboratorio"
                   value="{{ old('laboratorio') }}" required>

            <label for="disponible">Disponibilidad</label>
            <select id="disponible" name="disponible" required>
                <option value="1" @selected(old('disponible', '1') == '1')>Disponible</option>
                <option value="0" @selected(old('disponible') === '0')>No disponible</option>
            </select>

             <button type="submit">Registrar lote</button>
        </form>
    </main>
</body>
</html>