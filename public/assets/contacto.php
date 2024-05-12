<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Monitoreo de Agua Pluvial</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style>
    body {
      background-color: #f8f9fa; /* Color de fondo neutro */
    }
    header {
      background-color: #007bff; /* Fondo azul para el encabezado */
    }
   .navbar-light.navbar-nav.nav-link {
      color: #ffffff; /* Color de texto blanco para los enlaces del menú */
    }
   .navbar-light.navbar-nav.nav-link:hover {
      color: #0056b3; /* Color de texto azul oscuro al pasar el mouse */
    }
   .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); /* Sombra suave para las tarjetas */
      transition: 0.3s; /* Transición suave para el efecto de sombra */
      border-radius: 5px; /* Bordes redondeados */
    }
   .btn-primary {
      background-color: #007bff; /* Color de botón azul */
      border-color: #007bff;
    }
   .btn-primary:hover {
      background-color: #0056b3; /* Color de botón azul oscuro al pasar el mouse */
      border-color: #0056b3;
    }
    #contacto {
      background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con baja opacidad */
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); /* Sombra suave */
      transition: 0.3s; /* Transición suave para el efecto de sombra */
      border-radius: 5px; /* Bordes redondeados */
      margin: 20px auto; /* Centrado y margen */
      max-width: 800px; /* Ancho máximo */
      padding: 30px; /* Espaciado interno para mejorar la legibilidad */
    }
 </style>
</head>
<body>

<header class="bg-info py-3">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <img src="./iconoempresa.png" width="80" height="80" class="rounded-circle">
                <span class="h4 text-white ml-2">Monitoreo de Agua Pluvial</span>
            </div>
            <div class="col-auto">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contacto.php">Soporte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section id="contacto" class="bg-light py-5">
    <div class="container-fluid"> <!-- Mantener container-fluid para ocupar todo el ancho -->
        <div class="container"> <!-- Agregar un contenedor adicional para centrar el contenido -->
            <h2 class="text-center mb-4">¿Necesitas ayuda? ¡Contáctanos!</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3>Estamos aquí para ayudarte. </h3>
                    <p>Dirección: Av. Té 950, Granjas México, Iztacalco, 08400 Ciudad de México, CDMX</p>
                    <p>Teléfono: (55) 6666-6666</p>
                    <p>Email: soporte@cuidemoselmundo.com.mx</p>
                </div>
                <div class="col-md-6">
                    <h3>Envíanos tu mensaje</h3>
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
                            <label for="mensaje">Mensaje:</label>
                            <textarea class="form-control" id="mensaje" rows="3" placeholder="Escriba su mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

