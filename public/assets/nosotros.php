<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
        #nosotros {
            background-color: #ffffff; /* Fondo blanco para el contenido */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); /* Sombra suave */
            transition: 0.3s; /* Transición suave para el efecto de sombra */
            border-radius: 5px; /* Bordes redondeados */
            margin: 20px auto; /* Centrado y margen */
            max-width: 800px; /* Ancho máximo */
        }
      .text-white {
            color: #343a40!important; /* Color de texto oscuro para contraste */
        }
      .btn-light {
            background-color: #007bff; /* Color de botón azul */
            border-color: #007bff;
            color: #ffffff; /* Texto blanco */
            padding: 5px 10px; /* Reducir el padding del botón */
            font-size: 14px; /* Reducir el tamaño de la fuente */
        }
      .btn-light:hover {
            background-color: #0056b3; /* Color de botón azul oscuro al pasar el mouse */
            border-color: #0056b3;
        }
      .team-member {
            text-align: center;
            margin-bottom: 20px;
        }
      .team-member img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto;
        }
      .team-member h4 {
            margin-top: 10px;
        }
       /* Ajuste para centrar el contenido de misión y visión */
      .mission-vision-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center; 
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
                            <li class="nav-item active">
                                <a class="nav-link" href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
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

<section id="nosotros" class="py-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-white">¡Conocemos el agua pluvial!</h2>
                    <p class="text-white">Somos una empresa dedicada al monitoreo de agua pluvial, con el objetivo de ayudar a las personas a aprovechar este valioso recurso de manera eficiente y sostenible.</p>
                    <ul class="list-unstyled text-white">
                        <li>Monitoreo de la calidad del agua pluvial</li>
                        <li>Diseño de sistemas de captación y almacenamiento</li>
                        <li>Asesoría para el uso eficiente del agua pluvial</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="./captacionagua.jpg" alt="Imagen 1" class="img-fluid">
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-md-6 mission-vision-container">
                    <h3 class="text-center">Misión</h3>
                    <p class="text-center text-white">Diseñar e implementar sistemas de recolección de agua pluvial para reducir el consumo de agua potable y promover prácticas sostenibles de gestión del agua.</p>
                </div>
                <div class="col-md-6 mission-vision-container">
                    <h3 class="text-center">Visión</h3>
                    <p class="text-center text-white">Convertirse en un referente en gestión sostenible del agua, creando conciencia sobre el uso responsable del agua y promoviendo la implementación de sistemas similares en otras organizaciones.</p>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2 class="text-center text-white">Nuestro Equipo</h2>
                    <div class="row">
                        <div class="col-md-3 team-member">
                            <img src="./naomi.jpg" alt="">
                            <h4>Dafne Bravo</h4>
                            <p><strong>Ingeniero en informática.</strong></p>
                            <p><strong>Boleta:</strong>2021601480</p>
                        </div>
                        <div class="col-md-3 team-member">
                            <img src="./alberto.jpg" alt="">
                            <h4>Alberto Covarrubias</h4>
                            <p><strong>Ingeniero en informática.</strong></p>
                            <p><strong>Boleta:</strong>2020602788</p>
                        </div>
                        <div class="col-md-3 team-member">
                            <img src="./josue.jpg" alt="">
                            <h4>Josué Montiel</h4>
                            <p><strong>Ingeniero en informática.</strong></p>
                            <p><strong>Boleta:</strong>2020600672</p>
                        </div>
                        <div class="col-md-3 team-member">
                            <img src="./rodrigogato.jpg" alt="Miembro 4">
                            <h4>Rodrigo Chavez</h4>
                            <p><strong>Ingeniero en informática.</strong></p>
                            <p><strong>Boleta:</strong>2020360685</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <a href="contacto.php" class="btn btn-light">Contáctanos</a>
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



