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
    <link rel="stylesheet" href="css/body.css">
    <!-- icono de la pestaña-->
	<link rel=" icon" href="img/focus.jpeg">
	<!-- fin icono de la pestaña -->
    </head>
    <div class="overlay"></div>
        <!-- Barra de navegación -->
         <center>
        <nav class="navbar navbar-expand-lg custom-navbar">
            <a class="navbar-brand navbar-link" href="#"><h1>FOCUS</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REGISTRARME</a>
                    </li>
                </ul>
            </div>
        </nav>
    </center>
        <!-- Fin de la barra de navegación -->

        <main>
            <br>
            <br>
             <center>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" style="width: 22rem;">
                            <img src="img/focus.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.762762149804!2d-74.08817562919121!3d4.6363614833187725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bd14943c13b%3A0x3de530667d9ff6b0!2sSede%20Bogot%C3%A1%20-%20Universidad%20Nacional%20de%20Colombia!5e0!3m2!1ses-419!2sus!4v1737159601940!5m2!1ses-419!2sus" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                              <a href="#" class="btn btn-morado">Ir a Aprendizaje</a>
                            </div>
                          </div>
                    </div>
                <div class="col-lg-6">
                    <div class="card text-center col-lg-8">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link" aria-current="true" href="login.php">INICIAR SESIÓN</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="true" href="">REGISTRARME</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
        <form action="crear.php" method="post" enctype="multipart/form-data" onsubmit="return validarFormulario();">
            <div class="mb-3">
                <label for="txtnombre" class="form-label">NOMBRE DE USUARIO</label>
                <input type="text" class="form-control" name="txtnombre" id="txtnombre" aria-describedby="helpId" placeholder="Escriba su nombre de usuario" required>
            
            </div>
            <div class="mb-3">
                <label for="txtcontrasenia" class="form-label">CONTRASEÑA</label>
                <input type="password" class="form-control" name="txtcontrasenia" id="txtcontrasenia" aria-describedby="helpId" placeholder="Escriba su contraseña" required>
            </div>
            <div class="mb-3">
                <label for="txtverifcontrasenia" class="form-label">VERIFIQUE LA CONTRASEÑA</label>
                <input type="password" class="form-control" name="txtverifcontrasenia" id="txtverifcontrasenia" aria-describedby="helpId" placeholder="Verifique su contraseña" required>
            </div>
            <div class="mb-3">
                <label for="txtcorreo" class="form-label">CORREO ELECTRÓNICO</label>
                <input type="email" class="form-control" name="txtcorreo" id="txtcorreo" aria-describedby="helpId" placeholder="Escriba su correo electrónico" required>
            </div>
            <input type="hidden" name="registro" value="1">
            <button type="submit" class="btn btn-primary">REGISTRARME</button>              
        </form>
        <script>
            function validarFormulario() {
                // Obtener valores de los campos de contraseña
                var contrasenia = document.getElementById("txtcontrasenia").value;
                var verifContrasenia = document.getElementById("txtverifcontrasenia").value;
            
                // Verificar que las contraseñas coincidan
                if (contrasenia !== verifContrasenia) {
                    alert("Las contraseñas no coinciden. Por favor, verifique.");
                    return false; // Evitar que el formulario se envíe
                }
                return true; // Permitir el envío del formulario
            }
             // Mostrar mensaje emergente desde la URL
             const params = new URLSearchParams(window.location.search);
             const mensaje = params.get("mensaje");
             if (mensaje) {
                 alert(mensaje);}
            </script>
                        </div>
                        </div>
                      </div>
     <!-- Inicio del formulario -->
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
