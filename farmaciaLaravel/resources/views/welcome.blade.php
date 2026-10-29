<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia del Sur</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/js/app.js')
</head>
<body>
    
    <header>
        <h1>Farmacia del Sur</h1>
        <button type="button" id="btn-tema" class="boton-modo">Modo día</button>
        <nav>
            <button type="button" id="btn-menu" class="hamburguesa">☰ Menú</button>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#ventas">Ventas</a></li>
                <li><a href="#inventario">Inventario</a></li>
				<li><a href="{{ route('lotes.index') }}">Lotes</a></li> 
                <li><a href="{{ route('lotes.create') }}">Nuevo Lote</a></li>
				<li><a href="{{ route('usuarios.create') }}">Nuevo Usuario</a></li>  
                <li><a href="{{ route('usuarios.index') }}">Ver usuarios</a></li> 
            </ul>
        </nav>
    </header>


    <main>
        <section class="alertas">

           <section class="alerta-stock">
                <header>
                    <h3>Alerta de Stock Bajo</h3>
                </header>
                
                <div class="cuerpo-alerta">
                    <p><strong>Producto:</strong> Paracetamol 500mg (Caja x 20 comprimidos)</p>
                    <p><strong>Stock actual:</strong> <span>4 unidades</span></p>
                    <p><strong>Stock mínimo requerido:</strong> 15 unidades</p>
                </div>
            </section>

           <section class="alerta-stock">
                <header>
                    <h3>Alerta de Stock Bajo</h3>
                </header>
                
                <div class="cuerpo-alerta">
                    <p><strong>Producto:</strong> Paracetamol 500mg (Caja x 20 comprimidos)</p>
                    <p><strong>Stock actual:</strong> <span>4 unidades</span></p>
                    <p><strong>Stock mínimo requerido:</strong> 15 unidades</p>
                </div>
            </section>

           <section class="alerta-stock">
                <header>
                    <h3>Alerta de Stock Bajo</h3>
                </header>
                
                <div class="cuerpo-alerta">
                    <p><strong>Producto:</strong> Paracetamol 500mg (Caja x 20 comprimidos)</p>
                    <p><strong>Stock actual:</strong> <span>4 unidades</span></p>
                    <p><strong>Stock mínimo requerido:</strong> 15 unidades</p>
                </div>
            </section>

            <section id="formulario-consultas" class="formulario-consultas">
                <h2>Formulario de consultas</h2>
                <form class="formulario1" novalidate>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo">

                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

                    <label for="mensaje">Mensaje:</label>

                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí"></textarea>

                    <button type="submit">Enviar</button>

                    <p id="error-pedido" class="aviso"></p>
                </form>
            </section>

        </section>
    </main>


	<footer> 
 		<p>Version 0.1.0</p>
        <p>Conexión a la base de datos: OK</p>
        <p>Murillo Apaza Luis Fernando</p>
	</footer>

    <script src="{{ asset('js/welcome.js') }}"></script>
 </body>

</body>
</html>