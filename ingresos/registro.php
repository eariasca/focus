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
    <link rel="stylesheet" href="../css/body.css">
    <!-- icono de la pestaña-->
	<link rel=" icon" href="../img/focus.jpeg">
	<!-- fin icono de la pestaña -->
    </head>
    <div class="overlay"></div>
        <!-- Barra de navegación -->
         <center>
        <nav class="navbar navbar-expand-lg custom-navbar">
            <a class="navbar-brand navbar-link" href="../index.php"><h1>FOCUS</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ingresos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gastos/gastos.php">Gastos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../sesion.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </center>
        <!-- Fin de la barra de navegación -->

        <main>
            <br>
            <br>
            <!-- Inicio del formulario -->
             <center>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card col-sm-12 col-md-8 col-lg-6">
                            <div class="card-header">
                                Registre sus ingresos
                            </div>
                            <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data" onsubmit="return confirm('Desea crear');">
                <div class="mb-3">
                    <label for="txtnombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="txtnombre" id="txtnombre" aria-describedby="helpId" placeholder="Escriba un nombre para su ingreso" required>
                
                </div>
                <div class="mb-3">
                    <label for="txtespecificacion" class="form-label">Monto a ingresar</label>
                    <input type="number" class="form-control" name="txtespecificacion" id="txtespecificacion" aria-describedby="helpId" placeholder="Digite el valor del monto a registrar" required>
                
                </div>
                <input type="hidden" name="save_task" value="1">
                <button type="submit" class="btn btn-primary">Agregar</button>
                                    
            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
             <!-- Fin formulario -->
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
