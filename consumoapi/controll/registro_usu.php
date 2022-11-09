<?php

    include ('conexion.php');

// crear variables de las input//
    $nombre_completo=$_POST ['nombre_completo'];
    $correo=$_POST ['correo'];
    $usuario=$_POST ['usuario'];
    $contrasena=$_POST ['contrasena'];
    $contrasena= hash('sha512',$contrasena);   //encriptacion de la constraseña//
    $query= "INSERT INTO usuarioapi(nombre, correo, usuario, contrasena) VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

// verificar no repetidos en DB correo

$verifica= mysqli_query($conexion,"SELECT * FROM usuarioapi WHERE correo='$correo'");

    if (mysqli_num_rows($verifica)>0){
        echo '
            <script>
            alert("El correo ya esta registrado, intente con otro");
            window.location = "../index.php";
            </script>
        ';

        exit();
    }

    // verificar no repetidos en DB usuario

$verifica= mysqli_query($conexion,"SELECT * FROM usuarioapi WHERE usuario='$usuario'");

if (mysqli_num_rows($verifica)>0){
    echo '
        <script>
        alert("El usuario ya esta registrado, intente con otro");
        window.location = "../index.php";
        </script>
    ';

    exit();
}




    // ejecutar//
    $ejecutar= mysqli_query($conexion,$query);

    if($ejecutar){
        echo'<script>alert ("Usuario almacenado exitosamente");
        window.location="../index.php";
        </script> ';
    }else{
    echo'<script>alert ("Usuario almacenado exitosamente");
    window.location="../index.php";
    </script> ';
}
mysqli_close($conexion);



