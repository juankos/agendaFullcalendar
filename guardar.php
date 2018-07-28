<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE DATOS</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="main">
        <div class="login-container">
            <div class="callout primary login">
                <h4>Regístrate</h4>
                
                <!-- Elementos del formulario para pedir datos para registrar nuevos usuarios -->

                <form class="" action="./procesos/guardarDatos.php" method="post">
                    <div class="row align-center">
                        <div class="small-7 columns">
                            <label>Nombre<input type="text" name="nombre" required=""></label>
                        </div>
                        <div class="small-7 columns">
                            <label>Apellido<input type="text" name="apellido" required=""></label>
                        </div>
                        <div class="small-7 columns">
                            <label>E-mail<input type="email" name="email" required=""></label>
                        </div>
                        <div class="small-7 columns">
                            <label>Clave<input type="password" name="clave" required=""></label>
                        </div>
                        <div class="small-7 columns btn-container">
                            <button type="submit" class="button">Enviar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>
