<?php
session_start();

include ('conexion.php');

$correo =$_POST['correo'];
$contrasena=$_POST['contrasena'];
$contrasena= hash('sha512', $contrasena);

//verificar datos BD//

$validar_login =mysqli_query($conexion, "SELECT * FROM usuarioapi WHERE correo='$correo' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){

    $_SESSION['usuario']= $correo;
    header("location: ../listapokemon.php");    
    exit;
}else{
    echo'
        <script>
            alert("Usuario no existe, validar datos de acceso");
            window.location = "../index.php";
        </script>    
    ';
    exit;
}

?>