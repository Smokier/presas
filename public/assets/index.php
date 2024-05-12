<?php
require('config.php');

session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
} else {
    // El usuario no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de Agua Pluvial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #f8f9fa; 
        }
        header {
            background-color: #007bff; 
        }
     .navbar-light.navbar-nav.nav-link {
            color: #ffffff; 
        }
     .navbar-light.navbar-nav.nav-link:hover {
            color: #0056b3; 
        }
     .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); 
            transition: 0.3s; 
            border-radius: 5px; 
        }
     .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
     .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        #tinaco {
            background-color: #cce5ff; /* Color del tinaco */
            width: 100%; /* Ancho del tinaco para llenar el ancho disponible */
            height: 0; /* Altura inicial del tinaco */
            border-radius: 10px; /* Bordes redondeados */
            transition: height 0.5s; /* Transición suave para la altura */
            margin-bottom: 20px; /* Margen inferior */
        }
     .table {
            width: 100%; /* Ajustar el ancho de la tabla al 100% */
        }
     .table td {
            padding: 10px; /* Ajustar el padding de las celdas de la tabla */
        }
    </style>
</head>
<body>
<header class="bg-info py-3">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <img src="./iconoempresa.png" alt="" width="80" height="80" class="rounded-circle">
                <span class="h4 text-white ml-2">Monitoreo de Agua Pluvial</span>
            </div>
            <div class="col-auto">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Datos cliente</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Especificaciones</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Contenedores de Agua</td>
                                <td>4 tinacos de 2500 litros cada uno</td>
                            </tr>
                            <tr>
                                <td>Capacidad de Captación por Captador</td>
                                <td>403.2 litros por hora</td>
                            </tr>
                            <tr>
                                <td>Área Cubierta por Captador</td>
                                <td>4m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Tubería de Interconexión</td>
                                <td>100 metros de tubería PVC</td>
                            </tr>
                            <tr>
                                <td>Sistema de Respaldo de Energía</td>
                                <td>Para anergizar las bombas en caso de apagón</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-md-6">
                    <canvas id="consumoAguaChart" width="400" height="300"></canvas>
                    <div class="row mt-5">
                        <div class="col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalImagen">Regar Pasto y Plantas</button>
                        </div>
                        <div class="col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalImagen1">Mandar agua al Inodoro</button>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Datos de los Tinacos</h4>
            <p>Aquí se muestran los datos de los tinacos:</p>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tinaco</th>
                    <th>Nivel Actual</th>
                    <th>Capacidad</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tinaco 1</td>
                    <td>70%</td>
                    <td>2500 L</td>
                    <td>Normal</td>
                </tr>
                <tr>
                    <td>Tinaco 2</td>
                    <td>50%</td>
                    <td>2500 L</td>
                    <td>Bajo</td>
                </tr>
                <tr>
                    <td>Tinaco 3</td>
                    <td>90%</td>
                    <td>2500 L</td>
                    <td>Lleno</td>
                </tr>
                <tr>
                    <td>Tinaco 4</td>
                    <td>90%</td>
                    <td>2500 L</td>
                    <td>Lleno</td>
                </tr>
                </tbody>
            </table>

            <div id="tinaco" class="tinaco"></div>

            <!-- Botones para dirigir el agua -->
            
        </div>
        <!-- Se eliminó el div con las actividades -->
    </div>
</div>
<div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="modalImagenLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalImagenLabel">Pasto y Plantas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
        <img src="./plantas.jpg" alt="Descripción de la imagen" class="rounded-circle"width="150" height="150" >
        <p>El agua ha sido enviada, gracias por su paciencia.</p>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalImagen1" tabindex="-1" role="dialog" aria-labelledby="modalImagenLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalImagenLabel">Inodoro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
        <img src="./inodoro.jpg" alt="Descripción de la imagen" class="rounded-circle"width="150" height="150">
        <p>El agua ha sido enviada, gracias por su paciencia.</p>
        </center>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        
        var niveles = $(".table tbody tr td:nth-child(2)").map(function() {
            return parseInt($(this).text());
        }).get();

       
        var maxNivel = Math.max.apply(null, niveles);
        
        var alturaMaxima = 200; 
        var tinaco = $("#tinaco");
        var altura = alturaMaxima * (maxNivel / 100);

        // Aplicar la altura al tinaco
        tinaco.css("height", altura + "px");
    });

    // Datos para la gráfica de consumo de agua
    var ctx = document.getElementById('consumoAguaChart').getContext('2d');
    var consumoAguaChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Tinaco 1', 'Tinaco 2', 'Tinaco 3', 'Tinaco 4'],
            datasets: [{
                label: 'Consumo de Agua (Litros)',
                data: [3, 3.5, 2.8, 3.2, 3.9],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)', 
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    function mostrarImagen(tipo) {
        var contenedor = document.getElementById('contenedor-imagen');
        contenedor.style.display = 'block'; // Muestra el contenedor
        // Aquí puedes agregar más lógica si necesitas mostrar diferentes imágenes según el tipo
    }
</script>
</body>
</html>






