<?php
session_start(); //Inicializamos todas las sesiones
if (!isset($_SESSION['user_id'])) {//Redireccionamos al formulario de ingreso en caso de que el usuario no exista;
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
            <center>
        <div class="col-md-6 bg-white">
        <table class="table table-bordered table-striped" id="datatable" style="width:100%">
            <thead>
                <tr style="color: black;">
                </center>
            <center>
                <th>Id</th>
                <th>tipo</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                    <?php
                    include('db.php');
                    /* Este código está ejecutando una consulta SQL para seleccionar todas las filas de la tabla
                      "productos" en la base de datos. La consulta se almacena en la variable ``. */
                      if (!isset($_SESSION['user_id'])) {
                        header("Location: index.php");
                        exit();
                    }
                    
                    $user_id = $_SESSION['user_id'];
                    $stmt = $mysqli->prepare("SELECT ingresos, gastos, categoria FROM gestor WHERE user_id = $_SESSION");
                    $stmt->bind_param("i", $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    

                    while ($row = mysqli_fetch_assoc($result_tasks)) {
                        ?>
                        <tr style="color: black;">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['ingresos']; ?></td>
                            <td><?php echo $row['gastos']; ?></td>
                            <td><?php echo $row['categoria']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fa fa-pencil" title="Editar" aria-hidden="true"></i>
                                </a>
                                <a href="#" onclick="eliminarProducto('<?php echo $row['id'] ?>');" class="btn btn-danger">
                                    <i class="fa fa-trash" title="Eliminar" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
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