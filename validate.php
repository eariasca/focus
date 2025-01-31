<?php 
session_start();
include('db.php');
if(isset($_POST['inicio'])){
    $user=$_POST['txtnombre'];
    $contra=sha1($_POST['txtcontrasenia']);
    $verificar= "SELECT id FROM usuarios WHERE user='$user' AND password='$contra'";
    $resultado3=mysqli_query($conn, $verificar);
    if($row=mysqli_fetch_assoc($resultado3)){
        $user_id = $row['id'];//capturamos id ususario
        //Iniciamos sesion del usuario para validar el ingreso
        $_SESSION['user_id'] = $user_id;
        header('Location: index.php');
        exit();
    }else{
        session_destroy();
        $mensaje="Usuario o contraseña incorrecta";
        header('location: login.php?mensaje='.$mensaje);
        exit();
    }
}

?>