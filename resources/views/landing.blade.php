<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio Manzanares</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Directorio de Negocios Manzanares</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#negocios">Negocios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>

        <div style="text-align: center; margin-top: 10px;">
            <a href="{{ route('login') }}" class="btn">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn">Registrarse</a>
            
        </div>
        
    </header>
    
    <section id="inicio">
        <h2>Bienvenido al Directorio de Manzanares</h2>
        <p>Encuentra los mejores negocios y servicios de tu barrio.</p>
        <img src="{{ asset('img/exterior-casas-manzanares.png.jpg') }}" alt="imagen de bienvenida" class="banner-img">
    </section>
    
    <section id="negocios">
        <h2>Negocios Destacados</h2>
        <div class="negocio">
            <img src="{{ asset('img/mercado.png') }}" alt="Negocio 1" class="negocio-img">
            <h3>Supermercado Manzanares</h3>
            <p>Los mejores productos a los mejores precios</p>
        </div>
        <div class="negocio">
            <img src="{{ asset('img/belleza.png') }}" alt="Negocio 2" class="negocio-img">
            <h3>Peluqueria</h3>
            <p>Cambia tu estilo solo aquí</p>
        </div>
        <div class="negocio">
            <img src="{{ asset('img/ferreteria.png') }}" alt="Negocio 3" class="negocio-img">
            <h3>Ferreteria</h3>
            <p>Las mejores herramientas con mejor calidad y precios</p>
        </div>
    </section>

    <section id="contacto">
        <h2>Contacto</h2>
        <p>Si deseas más información. Contáctanos!</p>
        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </section>
    
    <footer>
        <p>&copy; 2025 Directorio Manzanares. Todos los derechos reservados.</p>
    </footer>
</body>
</html>