<?php defined('BASEPATH') or die('unauthorized execution.'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Route Framework</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- 
    /**
    * Simple Route - By Pelcmedia
    */
    -->
</head>
<body>

    <main role="main" class="container text-center">
      <h1 class="mt-5">Simple Route <small><code>latest V1.0.0</code></small></h1>
      <p class="lead">Un pequeño framework hecho con cariño para programadores en apuros.</p>      
    </main>
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h4 class="text-primary">Open Source Github</h4>
                <a target="_blank" class="btn btn-secondary btn-lg mt-3"  href="https://github.com/PelcMediaOficial/php-simple-route.git">View on Github</a>
            </div>
            <div class="col-md-12">
                <h4 class="text-primary">Mi Primera Ruta</h4>
                <p>para crear alias, para nuestros archivos php, se debe ingresar a <code>./application/config/routes.php</code></p>
                <pre class="alert alert-dark">/**
* Esta sección apunta directamente a la carpeta ./application/modules
* Ejemplo 1 $route["mi-alias"] = "{carpeta}/{nombre-archivo}.php";
* Ejemplo 2 $route["mi-alias"] = "{nombre-archivo}.php";
*/

$route["home"] = "home.php";</pre>                
                <p>Define que el alias <code>$route["home"]</code> y el archivo al que apunta <code> = "home.php";</code>.</p>                
                <p> el archivo al que apunta debe estar dentro de la siguiente carpeta <code>./application/modules/</code></p>

                <p> y listo, ya tienes tu primer archivo con alias, para tu api en php.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>