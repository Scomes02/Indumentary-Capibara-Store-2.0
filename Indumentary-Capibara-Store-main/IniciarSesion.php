<?php
session_start(
);
include('Conexion.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Usuario = $_POST['Usuario'];
    $Clave = $_POST['Clave'];

    if(empty($Usuario)){
        header("Location: iniciocapibara.php?error=El Usuario Es Requerido");
        exit();
    } elseif(empty($Clave)){
        header("Location: iniciocapibara.php?error=La Clave Es Requerida");
        exit();
    } else {
        $Sql = "SELECT * FROM usuarios WHERE nombre = '$Usuario'";
        $result = mysqli_query($conexion, $Sql); 

        if($result === false){
            echo "Error en la consulta: " . mysqli_error($conexion);
        } elseif(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            $Usuario = $row['nombre'];
            $Clave = $row['Clave'];
            header("Location: index.php");
            exit();
        }
    }
}
?>