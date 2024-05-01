<?php

session_start();

include_once('Conexion.php');

if(isset($_POST['$Usuario'])&& isset($_POST['Nombre_completo'])&& isset($_POST['Clave'])&& isset($_POST['RClave'])){
    function validar($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
       
        return $data;
    }
    $Usuario = validar($_POST['Usuario']);
    $Nombre_completo = validar($_POST['Nombre_completo']);
    $Clave = validar($_POST['Clave']);
    $RClave = validar($_POST['RClave']);

    $datosUsuarios = 'Usuario' . $Usuario . 'Nombre_completo' . $Nombre_completo;

    if(empty ($Usuario)){
        header("location: CrearCuenta.php?error=El usuario es requerido&$datosUsuarios");
        exit();
    }elseif(empty($Nombre_completo)){
        header("location: CrearCuenta.php?error=El nombre completo es requerido&$datosUsuarios");
        exit();
    }elseif(empty($Clave)){
        header("location: CrearCuenta.php?error=La clave es requerido&$datosUsuarios");
        exit();
    }elseif(empty($RClave)){
        header("location: CrearCuenta.php?error=La clave repetida es requerido&$datosUsuarios");
        exit();
    }elseif($Clave !== $RClave){
        header("location: CrearCuenta.php?error=Las claves no coinciden&$datosUsuarios");
        exit();
    }else {
        $sql = "SELECT * FROM Usuario WHERE Nombre_usuario = '$Usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query)>0){
            header("location: CrearCuenta.php?error=El usuario ya existe");
            exit();
        }else{
            $sql2 = "INSERT INTO Usuario(Nombre_completo, NombreUsuario, Clave) VALUES('$Nombre_completo','$Usuario','$Clave?)";
            $query2 = $conexion->query($sql2);

            if($query2){
                header("location: CrearCuenta.php?success=Usuario creado con exito");
                exit();
            }else{
                header("location: CrearCuenta.php?success=Ocurrio un error");
                exit();
            }
        }
    }
}else{
    header('location: CrearCuenta.php');
    exit();
}
