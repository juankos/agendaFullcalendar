<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESO A LA AGENDA</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="main">
        <div class="login-container">
            <div class="callout primary login">
                <h4>Iniciar sesión</h4>
                
                <!-- INICIO DEL FORMULARIO PARA INGRESO A LA AGENDA -->
                
                <form action="index.php" method="post">
                    <div class="row align-center">
                        <div class="small-7 columns">
                            <label>Email<input type="email" name="email" value="" required=""></label>
                        </div>
                        <div class="small-7 columns">
                            <label>Clave<input type="password" name="clave" value="" required=""></label>
                        </div>
                        <div class="small-7 columns btn-container">
                            <button type="submit" class="button">Ingresar</button>
                        </div>
                        <a href="guardar.php" class="button">¿No tienes una cuenta? regístrate aquí</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    <?php

		// Empezamos comprobando los datos del FORMULARIO
		// Para probar que FUNCIONA
		/*echo isset($_POST['email']);*/
		if (isset($_POST['email']) && isset($_POST['clave'])) {
			require_once "php/connect.php";
			require_once "procesos/login.php";
		}
    
		 ?>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/index.js"></script>

</body>

</html>