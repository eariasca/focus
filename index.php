<?php
session_start(); //Inicializamos todas las sesiones
if (!isset($_SESSION['usuario'])) {//Redireccionamos al formulario de ingreso en caso de que el usuario no exista;
    header('location: login.php?message=Su sesión ha caducado');
    exit(); //terminamos la ejecucion del código
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title> FOCUS </title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Estilos personalizados de css -->
        <link rel="stylesheet" href="css/body.css">
        <!-- Fin Estilos personalizados de css -->
        <!-- Icono de la pestaña -->
        <link rel="icon" href="img/focus.jpeg">
        <!-- Fin icono de la pestaña -->  
    </head>
    <body>
        <div class="overlay"></div>
        <!-- Barra de navegación -->
         <center>
            <nav class="navbar navbar-expand-lg custom-navbar">
                <a class="navbar-brand nav-link" href="#"><H1>FOCUS</H1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ingresos/registro.php">INGRESOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gastos/gastos.php">GASTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sesion.php">CERRAR SESIÓN</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </center>
        <!-- Fin de la barra de navegación -->
        <main>
            <section class="login_box_area section_gap">
                <div class="container">
                    <center>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1>Bienvenido al Gestor Finaciero</h1>
                            <h6>Este programa te permitirá gestionar tu dinero de manera eficiente, registrando tanto tus ingresos como tus gastos esenciales. A partir de la información que ingreses, obtendrás un registro detallado de tu presupuesto mensual, lo que te ayudará a tener un control más claro sobre tus finanzas.</h6>
                            <br><br>
                        </div>
                        <hr>
                        <div class="row"> 
                            <div class="card-body">
                                <h1>Monto Actual</h1>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="card-body col-lg-6">
                                    <img class="custom-image img-fluid" src="img/peso.jpg" style="width: 80px; height:auto;" alt="Imagen de inicio">
                                </div>
                                <div class="card-body col-lg-6">
                                    <h1>$ 0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <center>
                            <div class="row">
                                <div class="card-body ">
                                    <button type="button" class="btn btn-morado">INGRESOS</button>
                                    <button type="button" class="btn btn-morado">GASTOS</button>
                                    <button type="button" class="btn btn-morado">FINANZAS</button>
                                </div>
                            </div>
                        </center>
                    </div>
                </center>
                </div>
            </section>
            <hr>
        </main>
        <footer class="custom-footer">
            <div class="container text-center">
                <p>© 2025 Focus | Todos los derechos reservados</p>
                <p>
                    <a href="https://www.facebook.com" target="_blank">Facebook</a> |
                    <a href="https://www.twitter.com" target="_blank">Twitter</a> |
                    <a href="https://www.instagram.com" target="_blank">Instagram</a>
                </p>
            </div>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
