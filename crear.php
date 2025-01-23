<?php 
include('db.php');
if(isset($_POST['registro'])){
    $usuario=$_POST['txtnombre'];
    $contrasenia=sha1($_POST['txtcontrasenia']);
    $correo=$_POST['txtcorreo'];
    //consulta SQL para verificar si ya existe el usuario
    $consulta= "SELECT * FROM usuarios where user = '$usuario'";
    $resultado= mysqli_query($conn, $consulta);
}
if(mysqli_num_rows($resultado)>0){
    //el usuario ya existe
    $mensaje="Ya existe el usuario: $usuario";
    header('Location: registro.php?mensaje='.$mensaje);
    exit();
}else{
    $guardar="INSERT INTO usuarios(user, password, email) VALUES('$usuario', '$contrasenia', '$correo')";
    $resultado2=mysqli_query($conn, $guardar);
    if(!$resultado2){
        die("Error al guardar los datos.");
    }
    $mensaje="Informacion guardada exitosamente";
    header('Location: registro.php?mensaje='.$mensaje);
    exit();
}

?>