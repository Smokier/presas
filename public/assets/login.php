<?php
session_start();

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si el usuario y la contraseña son correctos
    $username = $_POST['username'];
    $password = $_POST['password']; 

    if (($username === 'rmenesesgo@ipn.mx' && $password === 'ProfesorM.1') || ($username === 'admin' && $password === '12345'))  {
        
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        // Contraseña incorrecta, muestra modal
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo neutro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('./mar.jpg'), url('./mar.jpg');
            background-position: center center;
            background-repeat: no-repeat, no-repeat;
            background-size: cover, cover;
            background-blend-mode: multiply;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            width: 400px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            margin-top: 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <div class="logo-container">
                        <img src="./iconoempresa.png" alt="Logo" width="80" height="80" class="rounded-circle">
                    </div>
                    <h2>Iniciar Sesión</h2>
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input type="text" id="username" name="username" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required class="form-control">
                        </div>
                        <input type="submit" value="Iniciar sesión" class="btn btn-primary">
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" data-toggle="modal" data-target="#recuperarContraseñaModal" class="btn btn-link">Recuperar Contraseña</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="recuperarContraseñaModal" tabindex="-1" role="dialog" aria-labelledby="recuperarContraseñaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recuperarContraseñaModalLabel">Recuperar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formRecuperarContraseña">
          <div class="form-group">
            <label for="email">Ingresa tu correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#recuperarContraseñaModal').on('show.bs.modal', function (event) {
            // Aquí puedes agregar código para manejar la apertura de la modal, como enviar datos al servidor
        });
        });
    </script>
</body>
</html>



