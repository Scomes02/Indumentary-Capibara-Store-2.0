<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $server = "localhost";
    $user = "ID";
    $password = "";
    $db = "registrocapibara";

    //Conectarse a XAMPP
    $conectar = new mysqli($server, $user, $password, $db);

    if($conectar -> connect_errno){
        die("Coneccion Fallida" . $conectar->connect_errno);
    }else{
        echo "Conectado";
    }

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    //Incertar a Base de Datos

    $DataBase = "INSERT INTO registro(nombre, email, contrasena) VALUES ($nombre, $email, $contrasena)";

    if ($conectar ->query($DataBase) === TRUE) {
        echo "Su registro ha sido exitoso";    
    }else{
        echo "Su registro ha fallado".$conectar->error;
    }

    $conectar->close();
    sleep(3);
    header("Location: registro.html");
}
?>